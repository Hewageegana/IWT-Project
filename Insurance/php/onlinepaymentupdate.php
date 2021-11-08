
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<?php

require 'config.php';

if(isset($_POST['updt'])){


$name = $_POST['name'];
$payment = $_POST['payment'];
$groups = $_POST["groups"];
$description = $_POST['description'];
$method = $_POST['method'];
$cname = $_POST['cname'];
$cnumber = $_POST['cardnumber'];
$date = $_POST['date'];
$cv= $_POST['cv'];


$sql = "UPDATE payment SET Name='$name',	Payment_with = '$payment',User_Groups='$groups',Description='$description',	Payment_Method='$method',Card_Holders_Name='$cname',Card_Number = '$cnumber',Expired_date='$date',CV='$cv' WHERE Card_Number='$cnumber' ";

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