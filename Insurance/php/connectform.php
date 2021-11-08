<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php





require 'config.php';

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$policy = $_POST['policy'];



$sql = "INSERT INTO make_a_claim(Name,MobileNo,Email,PolicyNo) values('$name','$mobile','$email','$policy')";



if($con ->query($sql)){
	//echo "Inserted Successfully.<br/><br/><br/>";
	header("Location:../html/submit.html");
}
else{
	
	header("Location:../php/failed.php");
	echo "Error:".$con->error;
}








$con -> close();





?>
<form method="get" action="claimread.php">
	<input type="submit" value="Read" style="width: 100; height: 32; font-family: arial; font-size: 20px;border-radius: 10px; border-color: solid black;">

</form>

</body>
</html>