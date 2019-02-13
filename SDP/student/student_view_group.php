<!DOCTYPE html>
<html>
    
<head>
<link rel="stylesheet" type="text/css" href="css/group.css"/>      
<?php
    session_start();
    include "css/header.php";  
?>
<title>Private Groups</title> 


    
</head>

<body>
<?php
    $page = "group";
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
?>
<div class="wrapper">
<!--  Sidebar Holder -->
        <nav id="sidebar" style="overflow-y: auto;">
            <div class="sidebar-header">
                <h3>Private Group</h3>
            </div>

            <ul class="list-unstyled components">
                <?php
                    include "back/conn.php";
                    $sql = "SELECT * FROM private_group INNER JOIN student_group ON private_group.group_id = student_group.group_id WHERE student_group.student_id = '$student_id'";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)<=0)
                    {
                        echo "<li style='padding-left:25px;'>There is no Group</li>";   
                    }
                    else
                    {
                        while($row = mysqli_fetch_array($result))
                        {
                            $group_id = $row['group_id'];
                            $group_name = $row['group_title'];
                            echo "<div class='btn-group w-100'>";
                            echo "<button style='background-color:inherit; border:none; display:inline-block; text-align:left;' class='w-75 btn btn-primary btn-block float-left nav-link' onclick=\"location.href='student_view_group.php?group=$group_id'\">$group_name</button>";
                            echo "<button type='button' style='background-color:inherit; display:inline-block; border:none;' class='btn btn-primary dropdown-toggle float-right dropdown-toggle-split nav-link' data-toggle='dropdown'>";
                            echo "</button>";
                            echo "<div class='dropdown-menu'>";
                            echo "<button type='button' class='btn dropdown-item' data-toggle='modal' data-target='#quitGroup".$group_id."'>Quit Group</button>";
                            echo "</div>";
                            echo "</div>"; 
                        }
                    }
                ?>               
            </ul>
        
            
        </nav>
    

        <div id="content">
             
            <nav class="navbr navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbr-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
<?php
    if(isset($_GET['group']))
    {
        include "back/conn.php";
        $group_id = $_GET['group'];
        
//        First SQL
        $sql = "SELECT * FROM private_group INNER JOIN student_group ON private_group.group_id = student_group.group_id WHERE private_group.group_id = '$group_id' AND student_group.student_id = '$student_id'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)<=0)
        {
            echo "<h2 style='margin-right: 35%;'>You are not a member of the group</h2>";
        }
        else
        {
        while($row = mysqli_fetch_array($result))
        {
            $group_id = $row['group_id'];
            $title = $row['group_title'];
            echo "<h2 style=\"margin-right: 50%;\">$title</h2>";
        } 
                    
?>                 
                </div>
            </nav>
        <div class="container-fluid">
            <div class="card">
                
                        <!-- Group Result -->
                    
                
    
  
            
 <?php 
        //        Second SQL
                echo "<div class=\"card-body\" style=\"padding-bottom: 5px;\">";
                echo "<div class=\"container-fluid scroll\" style=\"overflow: auto; max-width: 100vw; max-height: 70vh;\">";
        
        
        $sql = "SELECT * FROM post p INNER JOIN student_group sg ON p.group_id = sg.group_id WHERE sg.group_id = '$group_id' AND p.post_type = 'PRIVATE' AND sg.student_id = '$student_id'";
        $result = mysqli_query($conn,$sql);
        
        while($row = mysqli_fetch_array($result))
        {
            $post_id = $row['post_id'];
            $post_title = $row['post_title'];
            $post_description = $row['post_description'];
            $post_date = $row['post_date'];
            
                echo "<div class=\"card bg-light text-dark\" style=\"height: 60vh; margin-bottom: 6vh;\">";
                echo "<div class=\"card-body\" style=\"max-height: 65vh;\">";
                echo "<div class=\"container-fluid float-left w-50 h-100\" style=\"width: 40vw; max-height: 65vh;\">";
                echo "<h7 class=\"w-75\" style=\"display:inline-block\"><a href=\"#\">$post_title</a></h7>";
                echo "<h7 class=\"float-right\" style=\"display:inline-block\">$post_date</h7><hr/>";
                echo "<p class=\"w-100 h-75\">$post_description</p>";
                echo "</div>";
                echo "<div class=\"container-fluid float-right w-50 h-100\" style=\" width: 40vw; height: 65%;\">";
                
                echo "<p style=\"text-decoration:underline\">Comment</p>";
                echo "<div class=\"card scroll\" style=\"overflow: auto; padding:5px;max-height: 65%;\">";
                echo "<div class=\"container-fluid float-left\">";
                $sql_comment = "SELECT * FROM comment WHERE post_id = '$post_id'";
                $result_comment = mysqli_query($conn,$sql_comment);
                while($rows = mysqli_fetch_array($result_comment))
                {
                    $comment = $rows['comment'];
                    $date = $rows['comment_datetime'];
                    $student_id = $rows['student_id'];
                    $teacher_id = $rows['teacher_id'];
                    

                    if(empty($student_id))
                    {
                        $sql_name = "SELECT * FROM teacher WHERE teacher_id = '$teacher_id'";
                        $result_name = mysqli_query($conn,$sql_name);
                        while($row_name = mysqli_fetch_array($result_name))
                        {
                            $teacher_username = $row_name['teacher_username'];
                            $role = "Teacher";
                            echo "<h7 class=\"w-50\" style=\"display:inline-block\">$teacher_username ($role)</h7>";

                        }
                    }
                    else if(empty($teacher_id))
                    {
                        $sql_name = "SELECT * FROM student WHERE student_id = '$student_id'";
                        $result_name = mysqli_query($conn,$sql_name);
                        while($row_name = mysqli_fetch_array($result_name))
                        {
                            $student_username = $row_name['student_username'];
                            $role = "Student";
                            echo "<h7 class=\"w-50\" style=\"display:inline-block\">$student_username ($role)</h7>";
                            
                        }
                    }
                    
                        echo "<h7 class=\"float-right\" style=\"display:inline-block\">$date</h7>";
                        echo "<p>$comment</p>";
                        echo "<hr/>";                    
                }
                echo "</div></div><br/>";
            
                echo "<form method=\"post\" action=\"back/add_comment.php\">";
                echo "<input type=\"text\" class=\"form-control w-75\" style=\"display:inline-block\" name=\"comment\" placeholder=\"Enter Comment...\" required=\"required\"/>";
                echo "<input type=\"hidden\" value='$group_id' name='group_id'/>";
                echo "<input type=\"hidden\" value='$post_id' name='post_id'/>";
                echo "<input type=\"submit\" class=\"btn btn-info\" style=\"margin-left: 2vh;\" name=\"submit\" value=\"Comment\"/>";
                echo "</form></div></div></div>";  
                
        }
        
                echo "</div></div>";
            
        ?>
                <div class="card-footer" style="padding-top: 5px; padding-bottom: 5px;">
                    <center>
                    <div class="row max_auto">  
                        <div class="col">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#memberList">Member List</button>
                        </div>                        
                    </div>
                    </center>  
                </div> 
        <?php
        }
    }
    else
    {
        echo "<h1 style='margin-right: 27%;'>Welcome to History Group</h1>";
    }
                ?>
                    
                    
            </div> 
        </div>  
              
        </div>   
</div>
    
    <!-- //////////////////// MODAL BOX SECTION /////////////////// -->
    
            <!-- Quit Group Modal -->
    
            <?php
            $query = "SELECT * FROM private_group INNER JOIN student_group ON private_group.group_id = student_group.group_id WHERE student_group.student_id = '$student_id'";
            $q_result = mysqli_query($conn,$query);
                
            while($row = mysqli_fetch_array($q_result))
            {
                $g_id = $row['group_id'];
            
            ?>
            <div class='modal fade' id='quitGroup<?php echo $g_id ?>'>
                <div class='modal-dialog'>
                  <div class='modal-content'>

                    <!-- Modal Header -->
                    <div class='modal-header'>
                      <h4 class='modal-title'>Enter the Group Name to Quit</h4>
                      <button type='button' class='close' data-dismiss='modal'>&times;</button>
                    </div>

                    <!-- Modal body -->
                    <form method='post' action='back/quit_group.php'>
                    <div class='modal-body'>
                        <input type='hidden' name='group_id' value='<?php echo $g_id ?>'/>
                        <input type='text' class='form-control' required='required' name='delete' placeholder='Please Enter Confirmation...'/>
                    </div>

                    <!-- Modal footer -->
                    <div class='modal-footer'>
                      <input type='submit' name='submit' class='btn btn-success mx-auto' value='Quit Group'/>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            <?php } ?>
    
    <?php
    if(isset($_GET['group']))
    {
        ?>
    
    <!-- //////////////////////////////////////////////////////////// -->
    
                <!-- Member List Modal -->
                <div class="modal fade" id="memberList">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Member Listing</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <?php
                                    $teacher_sql = "SELECT * FROM private_group WHERE group_id = '$group_id'";
                                    $result_teacher = mysqli_query($conn,$teacher_sql);
                                    while($rows = mysqli_fetch_array($result_teacher))
                                    {
                                        $teacher_id = $rows['teacher_id'];
                                        $uname_sql = "SELECT * FROM teacher WHERE teacher_id = '$teacher_id'";
                                        $uname_result = mysqli_query($conn,$uname_sql);
                                        while($row_uname = mysqli_fetch_array($uname_result))
                                        {
                                            $teacher_username = $row_uname['teacher_username'];
                                        }
                                    }
                                echo "<h2>Teacher: <strong>$teacher_username</strong></h2>";
                                ?>
                                
                            <table border="1px" class="w-100">
                                <tr>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Full Name</th>
                                </tr>
                                <?php
                                  
                                    $sql = "SELECT * FROM student INNER JOIN student_group ON student.student_id = student_group.student_id ".
                                        "INNER JOIN private_group ON student_group.group_id = private_group.group_id WHERE private_group.group_id = '$group_id'";
                                    $result = mysqli_query($conn,$sql);
                                    while($row = mysqli_fetch_array($result))
                                    {
                                        $student_username = $row['student_username'];
                                        $student_email = $row['student_email'];
                                        $student_name = $row['first_name']." ".$row['last_name'];
                                        if(empty($row['first_name']) && empty($row['last_name']))
                                        {
                                            $student_name = "Not Set Yet";
                                        }
                                        echo "<tr>";
                                        echo "<td><input type='text' class='form-control' value='$student_username' readonly/></td>";
                                        echo "<td><input type='text' class='form-control' value='$student_email' readonly/></td>";
                                        echo "<td><input type='text' class='form-control' value='$student_name' readonly/></td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </table>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
    
    <?php
    }
    ?>
    
        
                
<script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });


$(function(){
	$('[role=dialog]')
	    .on('show.bs.modal', function(e) {
		    $(this)
		        .find('[role=document]')
		            .removeClass()
		            .addClass('modal-dialog ' + $(e.relatedTarget).data('ui-class'))
	})
})
    $('.scroll').scrollTop($('.scroll')[0].scrollHeight);
</script>
  
<?php
    include "css/footer.php";
?>
    
</body>    

</html>