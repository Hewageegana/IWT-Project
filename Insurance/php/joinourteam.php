<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php




require 'config.php';


$department = $_POST['Dpt'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];




$sql = "INSERT INTO join_our_team(FirstName,SurName,Email,MobileNo,Dept) values('$firstname','$lastname','$email','$mobile','$department')";



if($con ->query($sql)){
	echo "Inserted Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
}








  




$con -> close();





?>
<form method="get" action="joinourteamread.php">
	<input type="submit" value="Read" style="width: 100; height: 32; font-family: arial; font-size: 20px;border-radius: 10px; border-color: solid black;">

</form>

</body>
</html>