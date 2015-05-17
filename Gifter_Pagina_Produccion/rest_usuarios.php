<?php
	$link =mysql_connect("localhost","root","redpanda21");
	mysql_select_db("gifter_db",$link);
	$name = isset($_GET['name']) ? mysql_real_escape_string($_GET['name']) : “”;
	$sql = "SELECT name,Credits FROM user WHERE name='$name'";

	if($link){
		$qur = mysql_query($sql);
		$result = array();

		while($data = mysql_fetch_assoc($qur)) {
			$result[] = $data;
		}

		$data = array("data" => $result);
		
		header('Content-type: application/json');
		echo json_encode($data);
	}
