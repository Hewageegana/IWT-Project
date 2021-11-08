
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<?php

require 'config.php';

if(isset($_POST['updt'])){


$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];


$sql = "UPDATE signup SET Email='$email',password = '$password',Confirmed_password='$confirm' WHERE Email='$email' ";

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