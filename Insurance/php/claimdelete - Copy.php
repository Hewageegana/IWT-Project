<?php

require 'config.php';

if(isset($_POST['delt'])){


$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$policy = $_POST['policy'];


$sql = "DELETE FROM make_a_claim WHERE PolicyNo='$policy'";

if($con ->query($sql)){
	echo "Deleted Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
	}


}






?>