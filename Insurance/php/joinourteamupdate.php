
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<?php

require 'config.php';

if(isset($_POST['updt'])){



$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$department = $_POST['Dpt'];


$sql = "UPDATE join_our_team SET FirstName='$firstname',SurName='$lastname',Email='$email',MobileNo='$mobile',Dept='department' WHERE Email='$email' ";

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