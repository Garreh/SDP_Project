<?php
    $result = array();
    include "../conn.php";
    if(isset($_POST['sort'])){        
        $sort = $_POST['sort'];
        if($sort == "id")
        {
            $sql = "SELECT * FROM teacher ORDER BY teacher_id";
            $found = mysqli_query($conn,$sql);
            if(mysqli_num_rows($found)<=0){
                $result = "There is no teacher yet";
                echo "<br/><br/>".$result."<br/><br/>";
            }else{
                $result[0] = "<table border='2px'>";
                $result[1] = "<tr>";
                $result[2] = "<th>ID</th>";
                $result[3] = "<th>Name</th>";
                $result[4] = "<th>Username</th>";
                $result[5] = "<th>Email</th>";
                $result[6] = "<th>Date of Birth</th>";
                $result[7] = "</tr>";
                for($i=0;$i<8;$i++)
                    {
                       echo $result[$i]; 
                    }
                while($row = mysqli_fetch_array($found)){
                    $id = $row['teacher_id'];
                    $name = $row['first_name']." ".$row['last_name'];
                    $username = $row['teacher_username'];
                    $email = $row['teacher_email'];
                    $dob = $row['dob'];
                    if($dob == "")
                    {
                        $dob = "Not set";
                    }
                        
                        $result[8] = "<tr>";
                        $result[9] = "<td><input type='text' value='".$id."' disabled/></td>";
                        $result[10] = "<td><input type='text' value='".$name."' disabled/></td>";
                        $result[11] = "<td><input type='text' value='".$username."' disabled/></td>";
                        $result[12] = "<td><input type='text' value='".$email."' disabled/></td>";
                        $result[13] = "<td><input type='text' value='".$dob."' disabled/></td>";
                        $result[14] = "<td><input type='button' value='Delete' onclick=\"window.location.href='confirm.php?teacher_id=$id'\"/></td>";
                        $result[15] = "</tr>";
                        
                    for($i=8;$i<16;$i++)
                    {
                       echo $result[$i]; 
                    }                   
                }
                $result[16] = "</table>";
                echo $result[16];
            }
        }
        else if($sort == "username")
        {
            $sql = "SELECT * FROM teacher ORDER BY teacher_username";
            $found = mysqli_query($conn,$sql);
            if(mysqli_num_rows($found)<=0){
                $result = "There is no teacher yet";
                echo "<br/><br/>".$result."<br/><br/>";
            }else{
                $result[0] = "<table border='2px'>";
                $result[1] = "<tr>";
                $result[2] = "<th>ID</th>";
                $result[3] = "<th>Name</th>";
                $result[4] = "<th>Username</th>";
                $result[5] = "<th>Email</th>";
                $result[6] = "<th>Date of Birth</th>";
                $result[7] = "</tr>";
                for($i=0;$i<8;$i++)
                    {
                       echo $result[$i]; 
                    }
                while($row = mysqli_fetch_array($found)){
                    $id = $row['teacher_id'];
                    $name = $row['first_name']." ".$row['last_name'];
                    $username = $row['teacher_username'];
                    $email = $row['teacher_email'];
                    $dob = $row['dob'];
                    if($dob == "")
                    {
                        $dob = "Not set";
                    }
                        
                        $result[8] = "<tr>";
                        $result[9] = "<td><input type='text' value='".$id."' disabled/></td>";
                        $result[10] = "<td><input type='text' value='".$name."' disabled/></td>";
                        $result[11] = "<td><input type='text' value='".$username."' disabled/></td>";
                        $result[12] = "<td><input type='text' value='".$email."' disabled/></td>";
                        $result[13] = "<td><input type='text' value='".$dob."' disabled/></td>";
                        $result[14] = "<td><input type='button' value='Delete' onclick=\"window.location.href='confirm.php?teacher_id=$id'\"/></td>";
                        $result[15] = "</tr>";
                        
                    for($i=8;$i<16;$i++)
                    {
                       echo $result[$i]; 
                    }                   
                }
                $result[16] = "</table>";
                echo $result[16];
            }
        }
        else if($sort == "email")
        {
            $sql = "SELECT * FROM teacher ORDER BY teacher_email";
            $found = mysqli_query($conn,$sql);
            if(mysqli_num_rows($found)<=0){
                $result = "There is no teacher yet";
                echo "<br/><br/>".$result."<br/><br/>";
            }else{
                $result[0] = "<table border='2px'>";
                $result[1] = "<tr>";
                $result[2] = "<th>ID</th>";
                $result[3] = "<th>Name</th>";
                $result[4] = "<th>Username</th>";
                $result[5] = "<th>Email</th>";
                $result[6] = "<th>Date of Birth</th>";
                $result[7] = "</tr>";
                for($i=0;$i<8;$i++)
                    {
                       echo $result[$i]; 
                    }
                while($row = mysqli_fetch_array($found)){
                    $id = $row['teacher_id'];
                    $name = $row['first_name']." ".$row['last_name'];
                    $username = $row['teacher_username'];
                    $email = $row['teacher_email'];
                    $dob = $row['dob'];
                    if($dob == "")
                    {
                        $dob = "Not set";
                    }
                        
                        $result[8] = "<tr>";
                        $result[9] = "<td><input type='text' value='".$id."' disabled/></td>";
                        $result[10] = "<td><input type='text' value='".$name."' disabled/></td>";
                        $result[11] = "<td><input type='text' value='".$username."' disabled/></td>";
                        $result[12] = "<td><input type='text' value='".$email."' disabled/></td>";
                        $result[13] = "<td><input type='text' value='".$dob."' disabled/></td>";
                        $result[14] = "<td><input type='button' value='Delete' onclick=\"window.location.href='confirm.php?teacher_id=$id'\"/></td>";
                        $result[15] = "</tr>";
                        
                    for($i=8;$i<16;$i++)
                    {
                       echo $result[$i]; 
                    }                   
                }
                $result[16] = "</table>";
                echo $result[16];
            }
        }
        else
        {
            $sql = "SELECT * FROM teacher ORDER BY teacher_id";
            $found = mysqli_query($conn,$sql);
                if(mysqli_num_rows($found)<=0){
                    $result = "There is no teacher yet";
                    echo "<br/><br/>".$result."<br/><br/>";
                }else{
                   $result[0] = "<table border='2px'>";
                    $result[1] = "<tr>";
                    $result[2] = "<th>ID</th>";
                    $result[3] = "<th>Name</th>";
                    $result[4] = "<th>Username</th>";
                    $result[5] = "<th>Email</th>";
                    $result[6] = "<th>Date of Birth</th>";
                    $result[7] = "</tr>";
                    for($i=0;$i<8;$i++)
                        {
                           echo $result[$i]; 
                        }
                    while($row = mysqli_fetch_array($found)){
                        $id = $row['teacher_id'];
                        $name = $row['first_name']." ".$row['last_name'];
                        $username = $row['teacher_username'];
                        $email = $row['teacher_email'];
                        $dob = $row['dob'];
                        if($dob == "")
                        {
                            $dob = "Not set";
                        }

                            $result[8] = "<tr>";
                            $result[9] = "<td><input type='text' value='".$id."' disabled/></td>";
                            $result[10] = "<td><input type='text' value='".$name."' disabled/></td>";
                            $result[11] = "<td><input type='text' value='".$username."' disabled/></td>";
                            $result[12] = "<td><input type='text' value='".$email."' disabled/></td>";
                            $result[13] = "<td><input type='text' value='".$dob."' disabled/></td>";
                            $result[14] = "<td><input type='button' value='Delete' onclick=\"window.location.href='confirm.php?teacher_id=$id'\"/></td>";
                            $result[15] = "</tr>";

                        for($i=8;$i<16;$i++)
                        {
                           echo $result[$i]; 
                        }                   
                    }
                    $result[16] = "</table>";
                    echo $result[16];
                }
            }
        }
?>