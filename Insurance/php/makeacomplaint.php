<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php





require 'config.php';



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




$sql = "INSERT INTO make_a_complaint(complain_against_name,complain_against_LicenceNo,complain_against_NIC,Date_of_Incident,Missappropriation_Amount,Details_of_complaint,Contact_NO,Email,policy_issed_branch,Address,Policy_NO) values('$name','$licence','$nic','$date','$amount','$complain','$number','$email','$branch','$address','$policy')";



if($con ->query($sql)){
	echo "Inserted Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
}








$con -> close();





?>
<form method="get" action="makeacomplaintread.php">
	<input type="submit" value="Read" style="width: 100; height: 32; font-family: arial; font-size: 20px;border-radius: 10px; border-color: solid black;">

</form>

</body>
</html>