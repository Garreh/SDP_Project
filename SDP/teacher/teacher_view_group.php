<!DOCTYPE html>
<!DOCTYPE html>
<html>
    
<head>
<link rel="stylesheet" type="text/css" href="css/group.css"/>      
<?php
  include "css/header.php";  
?>
<title>Private Groups</title> 


    
</head>

<body>
<?php
    $page = "group";
    include "css/navbar.php";
    
    if(!isset($_SESSION['teacher']))
    {
        echo "<script>alert('You did not login yet! Teacher')</script>";
        die("<script>window.location.href='../login_page.php'</script>");
    }
    else
    {
        include "back/conn.php";
        $teacher = $_SESSION['teacher'];
        $query = "SELECT * FROM teacher WHERE teacher_username = '$teacher'";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($result))
        {
            $teacher_id = $row['teacher_id'];
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
                    $sql = "SELECT * FROM private_group WHERE teacher_id = 1 ORDER BY group_id";
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
                            echo "<button style='background-color:inherit; border:none; display:inline-block; text-align:left;' class='w-75 btn btn-primary btn-block float-left nav-link' onclick=\"location.href='teacher_view_group.php?group=$group_id'\">$group_name</button>";
                            echo "<button type='button' style='background-color:inherit; display:inline-block; border:none;' class='btn btn-primary dropdown-toggle float-right dropdown-toggle-split nav-link' data-toggle='dropdown'>";
                            echo "</button>";
                            echo "<div class='dropdown-menu'>";
                            echo "<button type='button' class='btn dropdown-item' data-toggle='modal' data-target='#manageGroup".$group_id."'>Delete Group</button>";
                            echo "</div>";
                            echo "</div>"; 
                        }
                    }
                ?>               
            </ul>
<center>
            <ul class="list-unstyled CTAs">
                <li>
                    <span id="modalResult"></span>
                   <button type="button" class="btn btn-primary form-control-range" data-toggle="modal" data-target="#createModal">Create Group</button> 
                </li>
            </ul>
  </center>          
            
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
        $sql = "SELECT * FROM private_group WHERE group_id = '$group_id' AND teacher_id = '$teacher_id'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)<=0)
        {
            echo "<h2 style='margin-right: 35%;'>There is no such private group</h2>";
        }
        else
        {
        while($row = mysqli_fetch_array($result))
        {
            $group_id = $row['group_id'];
            $title = $row['group_title'];
            echo "<button class='btn w-100' title='Click to view Description' data-toggle='modal' data-target='#titleDescription' style='background-color:inherit; font-size: 25px;'>$title</button>";
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
        
        
        $sql = "SELECT * FROM post WHERE group_id = '$group_id' AND post_type= 'PRIVATE' AND teacher_id ='$teacher_id'";
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
                echo "<h7 class=\"w-75\" style=\"display:inline-block\"><a href='group_post_detail.php?group_id=".$group_id."&post_id=".$post_id."'>$post_title</a></h7>";
                echo "<h7 class=\"float-right\" style=\"display:inline-block\">$post_date</h7><hr/>";
                echo "<p class=\"w-100 h-75\">$post_description</p>";
                echo "</div>";
                echo "<div class=\"container-fluid float-right w-50 h-100\" style=\" width: 40vw; height: 65%;\">";
                
                echo "<p class='float-left' style=\"text-decoration:underline\">Comment</p>";
                echo "<p class='text-dark float-right'><a href='back/delete_group_post.php?group_id=".$group_id."&post_id=".$post_id."'>Delete Post</a></p><br/><br/>";
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
                            echo "<h7 class=\"w-50\" style=\"display:inline-block\">$teacher_username</h7>";

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
                            echo "<h7 class=\"w-50\" style=\"display:inline-block\">$student_username</h7>";
                            
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
                    <div class="row">
                        <div class="col-4">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createPost">Create Post</button>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#memberList">Member List</button>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addMember">Add Member</button>
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
    
            <!-- Manage Group Modal -->
    
            <?php
            $query = "SELECT * FROM private_group WHERE teacher_id = '$teacher_id'";
            $q_result = mysqli_query($conn,$query);
                
            while($row = mysqli_fetch_array($q_result))
            {
                $g_id = $row['group_id'];
            
            ?>
            <div class='modal fade' id='manageGroup<?php echo $g_id ?>'>
                <div class='modal-dialog'>
                  <div class='modal-content'>

                    <!-- Modal Header -->
                    <div class='modal-header'>
                      <h4 class='modal-title'>Enter the Group Name to Delete</h4>
                      <button type='button' class='close' data-dismiss='modal'>&times;</button>
                    </div>

                    <!-- Modal body -->
                    <form method='post' action='back/delete_group.php'>
                    <div class='modal-body'>
                        <input type='hidden' name='group_id' value='<?php echo $g_id ?>'/>
                        <input type='text' class='form-control' required='required' name='delete' placeholder='Please Enter Confirmation...'/>
                    </div>

                    <!-- Modal footer -->
                    <div class='modal-footer'>
                      <input type='submit' name='submit' class='btn btn-success mx-auto' value='Delete Group'/>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            <?php } ?>
            <!-- Create Group Modal -->
              <div class="modal fade" id="createModal">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Create New Group</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <form method="post" action="back/create_group.php">
                    <div class="modal-body">
                            <input type="hidden" name="group_id" value="<?php echo $group_id ?>"/>
                            <label>Group Name</label><br/>
                            <input type="text" name="group_name" class="form-control" placeholder="Enter Desired Group Name..." required="required"/><br/>
                            <label>Group Description</label><br/>
                            <textarea name="group_description" class="form-control" placeholder="Enter Group Description..." required="required"></textarea><br/>   
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <input type="submit" name="submit" class="btn btn-success mx-auto" value="Create Group"/>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
    
    <?php
    if(isset($_GET['group']))
    {
        ?>
    
    <!-- //////////////////////////////////////////////////////////// -->
                <!-- Title Description Modal -->
                <div class="modal fade" id="titleDescription">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Group Description</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <?php 
                            $sql_description = "SELECT * FROM private_group WHERE group_id = '$group_id'";
                            $result_description = mysqli_query($conn,$sql_description);
                            while($row = mysqli_fetch_array($result_description))
                            {
                                $group_description = $row['group_description'];
                            }
                            ?>
                            <!-- Modal body -->
                            <div class="modal-body">
                            <?php echo $group_description ?>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
    
    <!-- //////////////////////////////////////////////////////////// -->
    
                    <!-- Add Post Modal -->
                <div class="modal fade" id="createPost">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Create New Post</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                            <form method="post" action="back/add_group_post.php">
                                
                                <input type="hidden" name="group_id" value="<?php echo $group_id ?>"/>
                                <input type="text" name="post_title" class="form-control" placeholder="Enter Post Title..." required="required"/><br/>
                                <textarea class="form-control" name="post_description" required="required" placeholder="Enter Post Description"></textarea><br/>
                                <center>
                                <input type="submit" class="btn btn-success w-50" value="Create Post" name="submit"/>
                                </center>
                            </form>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
    
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
                            <table border="1px" class="w-100">
                                <tr>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Full Name</th>
                                </tr>
                                <?php
                                    include "back/conn.php";
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
    
    <!-- //////////////////////////////////////////////////////////// -->
    
                <!-- Add Member Modal -->
                <div class="modal fade" id="addMember">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Add Member</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                        
                            <!-- Modal body -->
                            <div class="modal-body">
                            <form method="post" action="back/add_group_member.php">
                                <input type="hidden" name="group_id" value="<?php echo $group_id ?>"/>    
                                <input type="text" name="member_email" class="form-control" placeholder="Enter Member Email..."/><br/>
                                <center>
                                <input type="submit" name="submit" class="btn btn-success" value="Add Member"/>
                                </center>
                            </form>
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