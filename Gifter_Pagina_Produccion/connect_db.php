<?php
	$link =mysql_connect("localhost","root","redpanda21");
	if($link){
		mysql_select_db("gifter_db",$link);
	}else
	{
	}
?>