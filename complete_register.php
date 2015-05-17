<?php

	$user=$_POST['user'];
	$pass= $_POST['password'];
	$rpass=$_POST['password_confirm'];
	$credits = 0;

	require("connect_db.php");

	$checkuser=mysql_query("SELECT * FROM user WHERE name ='$user'");
	$check_user=mysql_num_rows($checkuser);
		if($pass==$rpass){
			if($check_user>0){
				echo ' <script language="javascript">alert("Warning, The user is already register");</script> ';
			}else{
				
				mysql_query("INSERT INTO user VALUES('','$user','$pass','$credits')");
				echo ' <script language="javascript">alert("User Register Success");</script> ';
				mysql_close($link);
			}
			
		}else{
			echo 'the passwords are different, please check your information';
		}

	
?>