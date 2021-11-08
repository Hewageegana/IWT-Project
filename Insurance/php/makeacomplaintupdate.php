
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
$licence = $_POST['licence'];
$nic = $_POST['nic'];
$date = $_POST['date'];
$amount = $_POST['amount'];
$complain = $_POST['complain'];
$number = $_POST['number'];
$email = $_POST['email'];
$branch = $_POST['branch'];
$address = $_POST['address'];
$policy = $_POST['policy'];


$sql = "UPDATE make_a_complaint SET complain_against_name='$name',complain_against_LicenceNo='$licence',complain_against_NIC='$nic',Date_of_Incident='$date',Missappropriation_Amount='$amount',Details_of_complaint='$complain',Contact_NO='$number',Email='$email',policy_issed_branch='$branch',Address='$address',Policy_NO = '$policy' WHERE Policy_NO='$policy' ";

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