<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['upload'])){
		$file_name = $_FILES['file']['name'];
		$file_temp = $_FILES['file']['tmp_name'];
		$file_size = $_FILES['file']['size'];
		
		$exp = explode(".", $file_name);
		$ext = end($exp);
		$file = time();
		$location = "files/".$file.".".$ext;
	
		if($file_size < 5242880){
			move_uploaded_file($file_temp, $location);
			mysqli_query($conn, "INSERT INTO `file` VALUES('', '$file', '$location')") or die(mysqli_error());
			echo "<script>alert('Successfully uploaded!')</script>";
			echo "<script>window.location='index.php'</script>";
		}else{
			echo "<script>alert('File too large too upload!')</script>";
			echo "<script>window.location='index.php'</script>";
		}
	}
?>