<?php
    session_start();
    if(!isset($_SESSION['teacher']))
    {
        echo "<script>alert('You did not login yet! Teacher')</script>";
        die("<script>window.href='../../login_page.php'</script>");
    }
    else
    {
        include "conn.php";
        $teacher = $_SESSION['teacher'];
        $query = "SELECT * FROM teacher WHERE teacher_username = '$teacher'";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($result))
        {
            $teacher_id = $row['teacher_id'];
        }
    }

    if(isset($_POST['topic']) && isset($_POST['description']) && isset($_POST['material_id']) && isset($_POST['post_id']))
      {
        include "conn.php";

        $topic = $_POST['topic'];
        $description = $_POST['description'];
        $material_id = $_POST['material_id'];
        $post_id = $_POST['post_id'];

        if(!empty($_FILES['material_slide']['name']))
          {
            //A
            include "material_slide_upload.php";
            $sql = "INSERT INTO section(section_topic,section_description,slide,material_id) VALUES('$topic','$description','$destination_slide','$material_id')";
            mysqli_query($conn,$sql);
              if(mysqli_affected_rows($conn)<= 0)
              {
                echo "<script>alert('Section created fail!')</script>";
                die("<script>window.history.go(-1);</script>");
              } else {
                      $id_sql = "SELECT * FROM section WHERE section_topic ='$topic' AND section_description = '$description' AND material_id = '$material_id'";
                      $id_result = mysqli_query($conn,$id_sql);
                      while($row = mysqli_fetch_array($id_result))
                        {
                          $material_id = $row['material_id'];
                        }
                          echo "<script>alert('Material Created Successfully!')</script>";
                          echo "<script>window.location.href='../post_detail.php?post_id=".$post_id."'</script>";
                        }
        } elseif (!empty($_FILES['material_file']['name'])) {
        // B
          include "material_file_upload.php";
          $sql = "INSERT INTO section(section_topic,section_description,image,material_id) VALUES('$topic','$description','$destination','$material_id')";
          mysqli_query($conn,$sql);
            if(mysqli_affected_rows($conn)<= 0)
              {
                echo "<script>alert('Section created fail!')</script>";
                die("<script>window.history.go(-1);</script>");
              }
              else
              {
                $id_sql = "SELECT * FROM section WHERE section_topic ='$topic' AND section_description = '$description' AND material_id = '$material_id'";
                $id_result = mysqli_query($conn,$id_sql);
                while($row = mysqli_fetch_array($id_result))
                  {
                    $material_id = $row['material_id'];
                  }
                    echo "<script>alert('Material Created Successfully!')</script>";
                    echo "<script>window.location.href='../post_detail.php?post_id=".$post_id."'</script>";
                  }
        } elseif (!empty($_FILES['material_video']['name'])) {
        // C
          include "material_video_upload.php";
          $sql = "INSERT INTO section(section_topic,section_description,video,material_id) VALUES('$topic','$description','$destination_video','$material_id')";
          mysqli_query($conn,$sql);
            if(mysqli_affected_rows($conn)<= 0)
              {
                echo "<script>alert('Section created fail!')</script>";
                die("<script>window.history.go(-1);</script>");
              }
              else
              {
                $id_sql = "SELECT * FROM section WHERE section_topic ='$topic' AND section_description = '$description' AND material_id = '$material_id'";
                $id_result = mysqli_query($conn,$id_sql);
                while($row = mysqli_fetch_array($id_result))
                  {
                    $material_id = $row['material_id'];
                  }
                    echo "<script>alert('Material Created Successfully!')</script>";
                    echo "<script>window.location.href='../post_detail.php?post_id=".$post_id."'</script>";
                  }
        } elseif (!empty($_FILES['material_slide']['name']) && !empty($_FILES['material_file']['name'])) {
          //A+B
          include "material_slide_upload.php";
          include "material_file_upload.php";
          $sql = "INSERT INTO section (section_topic,section_description,slide,image,material_id) VALUES('$topic','$description','$destination_slide','$destination','$material_id')";
          mysqli_query($conn,$sql);
            if(mysqli_affected_rows($conn)<= 0)
              {
                echo "<script>alert('Section created fail!')</script>";
                die("<script>window.history.go(-1);</script>");
              }
              else
              {
                $id_sql = "SELECT * FROM section WHERE section_topic ='$topic' AND section_description = '$description' AND material_id = '$material_id'";
                $id_result = mysqli_query($conn,$id_sql);
                while($row = mysqli_fetch_array($id_result))
                  {
                    $material_id = $row['material_id'];
                  }
                    echo "<script>alert('Material Created Successfully!')</script>";
                    echo "<script>window.location.href='../post_detail.php?post_id=".$post_id."'</script>";
                  }
        } elseif (!empty($_FILES['material_slide']['name']) && !empty($_FILES['material_video']['name'])) {
          //A+C
          include "material_slide_upload.php";
          include "material_video_upload.php";
          $sql = "INSERT INTO section(section_topic,section_description,slide,video,material_id) VALUES('$topic','$description','$destination_slide','$destination_video','$material_id')";
          mysqli_query($conn,$sql);
            if(mysqli_affected_rows($conn)<= 0)
              {
                echo "<script>alert('Section created fail!')</script>";
                die("<script>window.history.go(-1);</script>");
              }
              else
              {
                $id_sql = "SELECT * FROM section WHERE section_topic ='$topic' AND section_description = '$description' AND material_id = '$material_id'";
                $id_result = mysqli_query($conn,$id_sql);
                while($row = mysqli_fetch_array($id_result))
                  {
                    $material_id = $row['material_id'];
                  }
                    echo "<script>alert('Material Created Successfully!')</script>";
                    echo "<script>window.location.href='../post_detail.php?post_id=".$post_id."'</script>";
                  }
        } elseif (!empty($_FILES['material_slide']['name']) && !empty($_FILES['material_file']['name']) && !empty($_FILES['material_video']['name'])) {
          // A+B+c
          include "material_slide_upload.php";
          include "material_file_upload.php";
          include "material_video_upload.php";
          $sql = "INSERT INTO section(section_topic,section_description,slide,image,video,material_id) VALUES('$topic','$description','$destination_slide','$destination','$destination_video''$material_id')";
          mysqli_query($conn,$sql);
            if(mysqli_affected_rows($conn)<= 0)
              {
                echo "<script>alert('Section created fail!')</script>";
                die("<script>window.history.go(-1);</script>");
              }
              else
              {
                $id_sql = "SELECT * FROM section WHERE section_topic ='$topic' AND section_description = '$description' AND material_id = '$material_id'";
                $id_result = mysqli_query($conn,$id_sql);
                while($row = mysqli_fetch_array($id_result))
              {
                $material_id = $row['material_id'];
              }
                echo "<script>alert('Material Created Successfully!')</script>";
                echo "<script>window.location.href='../post_detail.php?post_id=".$post_id."'</script>";
              }
        } elseif (!empty($_FILES['material_file']['name']) && !empty($_FILES['material_video']['name'])) {
        // B+C
          include "material_file_upload.php";
          include "material_video_upload.php";
          $sql = "INSERT INTO section(section_topic,section_description,image,video,material_id) VALUES('$topic','$description','$destination','$destination_video','$material_id')";
          mysqli_query($conn,$sql);
            if(mysqli_affected_rows($conn)<= 0)
              {
                echo "<script>alert('Section created fail!')</script>";
                die("<script>window.history.go(-1);</script>");
              }
              else
              {
                $id_sql = "SELECT * FROM section WHERE section_topic ='$topic' AND section_description = '$description' AND material_id = '$material_id'";
                $id_result = mysqli_query($conn,$id_sql);
                while($row = mysqli_fetch_array($id_result))
                  {
                    $material_id = $row['material_id'];
                  }
                    echo "<script>alert('Material Created Successfully!')</script>";
                    echo "<script>window.location.href='../post_detail.php?post_id=".$post_id."'</script>";
                  }
        }   else {
        //no file
          $sql = "INSERT INTO section(section_topic,section_description,material_id) VALUES('$topic','$description','$material_id')";
          mysqli_query($conn,$sql);
          if(mysqli_affected_rows($conn)<= 0)
            {
              echo "<script>alert('Section created fail!')</script>";
              die("<script>window.history.go(-1);</script>");
            }
              else
            {
              $id_sql = "SELECT * FROM section WHERE section_topic ='$topic' AND section_description = '$description' AND material_id = '$material_id'";
              $id_result = mysqli_query($conn,$id_sql);
              while($row = mysqli_fetch_array($id_result))
                {
                  $material_id = $row['material_id'];
                }
                  echo "<script>alert('Material Created Successfully!')</script>";
                  echo "<script>window.location.href='../post_detail.php?post_id=".$post_id."'</script>";
                }
              }
            }
?>
