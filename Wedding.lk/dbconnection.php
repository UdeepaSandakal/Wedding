<?php
	$server="localhost";
	$username="root";
	$password="";
	$db="wedding";

	$conn=mysqli_connect($server,$username,$password,$db);

	if($conn){
		echo "Successfully connected with database";
	}else{
		echo "Not connected to database";
	}
?>