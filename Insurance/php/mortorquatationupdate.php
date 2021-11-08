	
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<?php

require 'config.php';

if(isset($_POST['updt'])){



$vehicle = $_POST['vehicle'];
$make = $_POST['make'];
$year = $_POST['year'];
$model = $_POST['model'];
$fuel = $_POST['fuel'];
$sum = $_POST['sum'];
$promo = $_POST['promo'];


$sql = "UPDATE mortor_quotation SET Vehicle_type='$vehicle',Make='$make',Model='$model',Year_of_Manufactured='$year',Fuel_type='fuel',Sumn_insured=$sum,Promo_code=$promo WHERE Promo_code='$promo' ";

if($con ->query($sql)){
	echo "Updated Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
	}


}






?>
</body>
</html>