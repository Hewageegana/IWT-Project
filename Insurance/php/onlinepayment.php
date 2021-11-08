<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php





require 'config.php';

$name = $_POST['name'];
$payment = $_POST['payment'];
$groups = $_POST["groups"];
$description = $_POST['description'];
$method = $_POST['method'];
$cname = $_POST['cname'];
$cnumber = $_POST['cardnumber'];
$date = $_POST['date'];
$cv= $_POST['cv'];




$sql = "INSERT INTO payment(Name,Payment_with,User_Groups,Description,Payment_Method,Card_Holders_Name,Card_Number,Expired_date,CV) values('$name','$payment','$groups','$description','$method','$cname','$cnumber','$date','$cv')";



if($con ->query($sql)){
	echo "Inserted Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
}








$con -> close();





?>
<form method="get" action="onlinepaymentread.php">
	<input type="submit" value="Read" style="width: 100; height: 32; font-family: arial; font-size: 20px;border-radius: 10px; border-color: solid black;">

</form>

</body>
</html>