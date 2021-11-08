<?php

require 'config.php';

if(isset($_POST['delt'])){


$vehicle = $_POST['vehicle'];
$make = $_POST['make'];
$year = $_POST['year'];
$model = $_POST['model'];
$fuel = $_POST['fuel'];
$sum = $_POST['sum'];
$promo = $_POST['promo'];


$sql = "DELETE FROM mortor_quotation WHERE Promo_code='$promo'";

if($con ->query($sql)){
	echo "Deleted Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
	}


}






?>