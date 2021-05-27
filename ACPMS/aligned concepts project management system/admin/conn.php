<?php
	$conn = new mysqli('localhost', 'root', '', 'projectmanagements');
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>