<?php

require 'config.php';

if(isset($_POST['delt'])){


$name = $_POST['name'];
$licence = $_POST['licence'];
$nic = $_POST['nic'];
$date = $_POST['date'];
$amount = $_POST['amount'];
$complain = $_POST['complain'];
$number = $_POST['number'];
$email = $_POST['email'];
$branch = $_POST['branch'];
$address = $_POST['address'];
$policy = $_POST['policy'];


$sql = "DELETE FROM make_a_complaint WHERE Policy_NO='$policy'";

if($con ->query($sql)){
	echo "Deleted Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
	}


}






?>