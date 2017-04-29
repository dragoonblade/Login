<?php

	$mysql=new mysqli('localhost', 'root', '', 'db');

	if($mysql->connect_errno){
		echo "Connection Failed";
	}

?>