
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<?php

require 'config.php';

if(isset($_POST['updt'])){



$uname = $_POST['uname'];
$pass = $_POST['pass'];


$sql = "UPDATE login SET User_Name='$uname',Password='$pass' WHERE  User_Name='$uname' ";

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