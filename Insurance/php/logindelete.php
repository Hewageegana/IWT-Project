<?php

require 'config.php';

if(isset($_POST['delt'])){


$uname = $_POST['uname'];
$pass = $_POST['pass'];


$sql = "DELETE FROM login WHERE User_Name='$uname'";

if($con ->query($sql)){
	echo "Deleted Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
	}


}






?>

