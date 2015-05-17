<?php
	$link =mysql_connect("localhost","raul","red21")or die ('Ha fallado la conexión: '.mysql_error());
	if($link){
		mysql_select_db("gifter_db",$link);
		echo "Se conecto whoo";
	}
?>
