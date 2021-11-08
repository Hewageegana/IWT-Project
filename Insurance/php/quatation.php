<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php





require 'config.php';

$vehicle = $_POST['vehicle'];
$make = $_POST['make'];
$year = $_POST['year'];
$model = $_POST['model'];
$fuel = $_POST['fuel'];
$sum = $_POST['sum'];
$promo = $_POST['promo'];



$sql = "INSERT INTO mortor_quotation(vehicle_type,Make,Model,Year_of_Manufactured,Fuel_type,Sumn_insured,Promo_code) values('$vehicle','$make','$model','$year','$fuel','$sum','$promo')";



if($con ->query($sql)){
	echo "Inserted Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
}








$con -> close();





?>
<form method="get" action="mortorquatationread.php">
	<input type="submit" value="Read" style="width: 100; height: 32; font-family: arial; font-size: 20px;border-radius: 10px; border-color: solid black;">

</form>

</body>
</html>