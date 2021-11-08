<?php

require 'config.php';

if(isset($_POST['delt'])){


$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];


$sql = "DELETE FROM signup WHERE  Email='$email'";

if($con ->query($sql)){
	echo "Deleted Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
	}


}






?>