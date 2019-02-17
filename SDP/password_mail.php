<?php
if(isset($_POST['email']))//check if the email is set
{
	$student_email = $_POST['email'];
	include("conn.php");
	$sql = "SELECT * FROM student WHERE student_email = '$student_email'";//to check whether this account exist in database
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)<=0)
	{
		echo "<script>alert('This account doesn\'t exist!')</script>";
		die("<script>window.history.go(-1)</script>");
	}
		while($row = mysqli_fetch_array($result))//if exist, get the information
		{
			$student_id = $row['student_id'];
            $email = $row['student_email'];
			$name = $row['first_name']." ".$row['last_name'];
		}
            // Please specify your Mail Server - Example: mail.example.com.
        ini_set("SMTP","ssl://smtp.gmail.com");

        // Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
        ini_set("smtp_port","465");

        // Please specify the return address to use
        ini_set('sendmail_from', 'lumkachun55@gmail.com.com');
		$to = $email;
        $subject = "Reset Password";
        $txt = "Click on this link <a href='http://localhost/SDP/recovery_password.php'></a>";
        $headers = "From: lumkachun55@gmail.com.com" . "\r\n".
            "CC: lumkachun1999@gmail.com";
        mail($to,$subject,$txt,$headers);
		
	
}
else
{
	echo "<script>alert('You did not set your email yet!')</script>";
	die("<script>window.history.go(-1)</script>");
}
?>