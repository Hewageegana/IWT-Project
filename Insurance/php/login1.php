<?php

$uname = $_POST['uname'];
$pass = $_POST['pass'];

	
	$conn=new mysqli("localhost","root","","vehicle_insurance_management_system");
	if ($conn->connect_error){
		die("Failed to connect:".$conn->connect_error);
	}
	else{
		$stmt=$conn->prepare("select * from signup where Email=?");
		$stmt->bind_param("s",$uname);
		$stmt->execute();
		$stmt_result=$stmt->get_result();
		if($stmt_result->num_rows>0){
			$data=$stmt_result->fetch_assoc();
			if($data['password']===$pass){
				
			echo"<script>alert ('LogIn Succefull')</script>";
			header("Location:../html/homepage.html");
			}else{
				echo"<script>alert ('Invalid Email or Password')</script>";
				header("Location:../html/login.html");
			}
			
		}else{
			//echo"<script>alert('Invalid Email or Password')</script>";
			header("Location:../html/login.html");
		}
		}
?>