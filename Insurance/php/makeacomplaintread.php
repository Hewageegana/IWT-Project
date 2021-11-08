<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../styles/claim_php.css">
    
</head>
<body>

<center>
	<h1 style="font-family: verdana; font-weight: 100; color: red;">MAKE A COMPLAINT</h1>
	<table border="2" style="font-family: verdana; font-size: 14px;"></center>

<?php

require 'config.php';

function readData(){
	
	GLOBAL $con;
    
$read = "SELECT complain_against_name,complain_against_LicenceNo,complain_against_NIC,Date_of_Incident,Missappropriation_Amount,Details_of_complaint,Contact_NO,Email,policy_issed_branch,Address,Policy_NO FROM make_a_complaint";

    $result = $con->query($read); 
    if ($result->num_rows > 0) 
    {

    	echo "<tr><th>complain_against_name</th><th>complain_against_LicenceNo</th><th>complain_against_NIC</th><th>Date_of_Incident</th><th>Missappropriation_Amount</th><th>Details_of_complaint</th><th>Contact_NO</th><th>Email</th><th>policy_issed_branch</th><th>Address</th><th>Policy_NO</th><th>Action</th></tr>";
        while($row = $result->fetch_assoc()) 
        {
        			echo "<tr class='row1'><form action='makeacomplaintupdate.php' method='POST'>";
                    echo"<td><input type='text' name='name' value=".$row["complain_against_name"]."></td>";
                    echo"<td><input type='text' name='licence' value=".$row["complain_against_LicenceNo"]."></td>";
                    echo"<td><input type='text' name='nic' value=".$row["complain_against_NIC"]."></td>";
                    echo"<td><input type='text' name='date' value=".$row["Date_of_Incident"]."></td>";
                    echo"<td><input type='text' name='amount' value=".$row["Missappropriation_Amount"]."></td>";
                    echo"<td><input type='text' name='complain' value=".$row["Details_of_complaint"]."></td>";
                    echo"<td><input type='text' name='number' value=".$row["Contact_NO"]."></td>";
                    echo"<td><input type='text' name='email' value=".$row["Email"]."></td>";
                    echo"<td><input type='text' name='branch' value=".$row["policy_issed_branch"]."></td>";
                    echo"<td><input type='text' name='address' value=".$row["Address"]."></td>";
                    echo"<td><input type='text' name='policy' value=".$row["Policy_NO"]."></td>";
                    
                   
                    echo"<td><input type='submit' name='updt' value='Update' id='Updt' class='update'></td></form>";
                  
                    echo "</tr>";


        
                    echo "<tr class='row2'><form action='makeacomplaintdelete.php' method='POST'>";
                    echo"<td><input type='text' name='name' value=".$row["complain_against_name"]."></td>";
                    echo"<td><input type='text' name='licence' value=".$row["complain_against_LicenceNo"]."></td>";
                    echo"<td><input type='text' name='nic' value=".$row["complain_against_NIC"]."></td>";
                    echo"<td><input type='text' name='date' value=".$row["Date_of_Incident"]."></td>";
                    echo"<td><input type='text' name='amount' value=".$row["Missappropriation_Amount"]."></td>";
                    echo"<td><input type='text' name='complain' value=".$row["Details_of_complaint"]."></td>";
                    echo"<td><input type='text' name='number' value=".$row["Contact_NO"]."></td>";
                    echo"<td><input type='text' name='email' value=".$row["Email"]."></td>";
                    echo"<td><input type='text' name='branch' value=".$row["policy_issed_branch"]."></td>";
                    echo"<td><input type='text' name='address' value=".$row["Address"]."></td>";
                    echo"<td><input type='text' name='policy' value=".$row["Policy_NO"]."></td>";
                   
                    echo"<td><input type='submit' name='delt' value='Delete' id='Delt' class='delete'></td></form>";
                   
                    echo "</tr>";

			
        }
    }
    else 
    {
        echo "No results";
    }
  

}
readData();

$con -> close();











?>
</table>
</body>
</html>