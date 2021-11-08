<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php





require 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];






$sql = "INSERT INTO signup(Email,password,Confirmed_password) values('$email','$password','$confirm')";



if($con ->query($sql)){
	echo "Inserted Successfully.<br/><br/><br/>";
	header("Location:../html/login1.html");
}
else{
	echo "Error:".$con->error;
}








$con -> close();





?>
<form method="get" action="signupread.php">
	<input type="submit" value="Read" style="width: 100; height: 32; font-family: arial; font-size: 20px;border-radius: 10px; border-color: solid black;">

</form>

</body>
</html>