<?php

require 'config.php';

if(isset($_POST['delt'])){


$name = $_POST['name'];
$payment = $_POST['payment'];
$groups = $_POST["groups"];
$description = $_POST['description'];
$method = $_POST['method'];
$cname = $_POST['cname'];
$cnumber = $_POST['cardnumber'];
$date = $_POST['date'];
$cv= $_POST['cv'];


$sql = "DELETE FROM payment WHERE Card_Number='$cnumber'";

if($con ->query($sql)){
	echo "Deleted Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
	}


}






?>