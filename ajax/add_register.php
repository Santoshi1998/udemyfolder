<?php

// server_name,username,password,database_name
$con = mysqli_connect("localhost","root","","project");
if(!$con){
	die("database is not connected");
}
	
	$username = $_POST['username'];
	$useremail = $_POST['useremail'];
	$password = $_POST['password'];
	$contactnumber = $_POST['contactnumber'];
	$status = 0;

	

	$qry = "INSERT INTO register(username,contact,email,password) VALUES('".$username."','".$contactnumber."','".$useremail."','".$password."')";
		$qry_execute = mysqli_query($con,$qry);

		if($qry_execute){
			$status = 1;
		}

		$response = ['status'=>$status];
		echo json_encode($response);



?>