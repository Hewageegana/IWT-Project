<?php

require 'config.php';

if(isset($_POST['delt'])){


$department = $_POST['Dpt'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];


$sql = "DELETE FROM join_our_team WHERE Email='$email'";

if($con ->query($sql)){
	echo "Deleted Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
	}


}






?>