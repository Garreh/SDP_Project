<?php

    $result = array();
	if(isset($_POST['password']) && !empty($_POST['password']))//to check if the password is set
	{
		$password = trim($_POST['password']);
		$password = htmlspecialchars($_POST['password']);
		
		if(strlen($password) < 8)//to check if the password length more then 8 characters
		{
			$result['msg'] = '&nbsp;&nbsp;&nbsp; Not a valid password';
			$result['status'] = false;
		}
        elseif(!preg_match('([a-z].*[0-9]|[0-9].*[a-z])', $password))//to check if the password contain
		{															//both number and alphabet character
			$result['msg'] = '&nbsp;&nbsp;&nbsp; Weak password';
			$result['status'] = false;		
		}
		elseif(!preg_match('([a-z].*[0-9].*[A-Z]|[a-z].*[A-Z].*[0-9]|[A-Z].*[0-9].*[a-z]|[A-Z].*[a-z].*[0-9]|[0-9].*[A-Z].*[a-z]|[0-9].*[a-z].*[A-Z])', $password))//to check if the password contain
		{															//both number and alphabet character
			$result['msg'] = '&nbsp;&nbsp;&nbsp; Moderate password';
			$result['status'] = "moderate";		
        }
        else
        {
            $result['msg'] = '&nbsp;&nbsp;&nbsp; Strong password';
			$result['status'] = true;
        }
	}
	else	//if there is no password entered, will pass a message to inform the user to enter password
	{
		$result['msg'] = '&nbsp;&nbsp;&nbsp; Please Enter Password!';
		$result['status'] = false;
	}
	
	echo json_encode($result);	//echo the result
	
?>