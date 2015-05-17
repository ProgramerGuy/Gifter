<?php

	session_start();

	$user=$_POST['user'];
	$pass= $_POST['password'];
	$url = "User_loginPage.php";

	require("connect_db.php");

	$checkuser=mysql_query("SELECT * FROM user WHERE name ='$user'");
	$check_user=mysql_num_rows($checkuser);

	if($check_user>0){
		$_SESSION['login_user']= $user;
		
		while($row = mysql_fetch_array($checkuser)) {
			if($row['password'] == $pass)
			{
				echo ' <h1>Login</h1>';
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $user);
				curl_setopt($ch, CURLOPT_HEADER, 0);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_exec($ch);
				header("Location:".$url);
				curl_close($ch);
			}
		} 
	}else{
		
		echo ' <script language="javascript">alert("Datos incorrectos, Revise");</script> ';
		mysql_close($link);
	}

	
?>