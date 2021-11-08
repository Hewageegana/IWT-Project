<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php





require 'config.php';

$uname = $_POST['uname'];
$pass = $_POST['pass'];




$sql = "INSERT INTO login(User_Name,Password) values('$uname','$pass')";



if($con ->query($sql)){
	echo "Inserted Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
}








$con -> close();





?>
<form method="get" action="loginread.php">
	<input type="submit" value="Read" style="width: 100; height: 32; font-family: arial; font-size: 20px;border-radius: 10px; border-color: solid black;">

</form>

</body>
</html>