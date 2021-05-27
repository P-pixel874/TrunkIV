<?php
	$conn = new mysqli('localhost', 'root', '', 'project_management');
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>