
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
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$policy = $_POST['policy'];


$sql = "UPDATE make_a_claim SET Name='$name',MobileNo = '$mobile',Email='$email',PolicyNo = '$policy' WHERE PolicyNo='$policy' ";

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