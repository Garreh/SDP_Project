<!DOCTYPE html>
<html>
<head>
    <title>View Result</title>
    <?php
    session_start();
    include "css/header.php";
    ?>
</head>

<body>
<?php
    $page = "post";
    include "css/navbar.php";
    if(!isset($_SESSION['student']))
    {
        echo "<script>alert('You did not login yet! Student')</script>";
        die("<script>window.location.href='../login_page.php'</script>");
    }
    else
    {
        include "back/conn.php";
        $student = $_SESSION['student'];
        $query = "SELECT * FROM student WHERE student_username = '$student'";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($result))
        {
            $student_id = $row['student_id'];
        }
    }

    if(isset($_GET['post_id']) && isset($_GET['test_id']))
    {
        $post_id = $_GET['post_id'];
        $test_id = $_GET['test_id'];

        $sql = "SELECT * FROM test WHERE test_id = '$test_id' AND post_id = '$post_id'";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($result))
        {
            $test_title = $row['test_title'];
            $test_description = $row['test_description'];
        }
?>
    <div class='container-fluid w-50' style='margin-top:2%;margin-bottom:12%;'>
        <div class="card">
            <div class="card-body">
                <h3>
                    <?php echo $test_title ?>
                </h3>
                <h5>
                    <?php echo $test_description ?>
                </h5>

                <center>
                <?php



                    $sql = "SELECT COUNT(*) AS total_q FROM question WHERE test_id = '$test_id'";
                    $sql2 = "SELECT COUNT(*) AS nocq FROM test inner join question on test.test_id = question.test_id inner join answer on question.question_id = answer.question_id inner join student_answer on student_answer.answer_id = answer.answer_id WHERE answer.answer_correct = 1 and test.test_id = '$test_id' ";

                    $result = mysqli_query($conn,$sql);
                    $result2 = mysqli_query($conn,$sql2);
                    $row1 = mysqli_fetch_array($result);
                    $row2 = mysqli_fetch_array($result2);
                    $total = $row1['total_q'];
                    $totalc = $row2['nocq'];
                    echo "<hr />";
                    echo "<h4>Results</h4>";
                    echo "<hr />";
                    echo "$totalc";
                    echo "/";
                    echo "$total";
                    $percentage = $totalc / $total * 100;
                echo "<hr />";
                    echo "$percentage";
                    echo "%";
                    echo "<hr />";

                    $grade = "$percentage";

                    switch ($grade) {
                      case ($grade <= 100 && $grade >= 90):
                        echo "A+";
                        break;
                      case ($grade <= 89.99 && $grade >= 80):
                        echo "A";
                        break;
                      case ($grade <= 79.99 && $grade >= 76.99):
                          echo "A-";
                        break;
                        case ($grade <= 75.99 && $grade >= 70):
                            echo "B+";
                          break;
                          case ($grade <= 69.99 && $grade >= 65):
                              echo "B";
                            break;
                            case ($grade <= 64.99 && $grade >= 60):
                                echo "B-";
                              break;
                              case ($grade <= 59.99 && $grade >= 55):
                                  echo "C+";
                                break;
                                case ($grade <= 54.99 && $grade >= 50):
                                    echo "C";
                                  break;
                                  case ($grade <= 49.99 && $grade >= 45):
                                      echo "C-";
                                    break;
                                    case ($grade <= 44.99 && $grade >= 40):
                                        echo "C";
                                      break;
                                      case ($grade >=0 && $grade <-39.99 ):
                                          echo "F";
                                        break;
                        default:
                        echo "no result";
                        break;
                    }
                ?>
                </center>
            </div>
        </div>
    </div>
<?php } ?>

<?php include "css/footer.php" ?>
</body>
</html>
