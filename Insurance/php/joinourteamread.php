<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="../styles/claim_php.css">
</head>
<body>

<center>
	<h1 style="font-family: verdana; font-weight: 100; color: red;">JOIN OUR TEAM</h1>
	<table border="2" style="font-family: verdana; font-size: 14px;"></center>

<?php

require 'config.php';

function readData(){
	
	GLOBAL $con;
    $read = "SELECT FirstName,SurName,Email,MobileNo,Dept FROM join_our_team";
    $result = $con->query($read); 
    if ($result->num_rows > 0) 
    {

    	echo "<tr><th>FirstName</th><th>SurName</th><th>Email</th><th>MobileNo</th><th>Dept</th></tr>";
        while($row = $result->fetch_assoc()) 
        {
        echo "<tr class='row1'><form action='joinourteamupdate.php' method='POST'>";
                    echo"<td><input type='text' name='firstname' value=".$row["FirstName"]."></td>";
                    echo"<td><input type='text' name='lastname' value=".$row["SurName"]."></td>";
                    echo"<td><input type='text' name='email' value=".$row["Email"]."></td>";
                    echo"<td><input type='text' name='mobile' value=".$row["MobileNo"]."></td>";
                    echo"<td><input type='text' name='Dpt' value=".$row["Dept"]."></td>";
                   
                    echo"<td><input type='submit' name='updt' value='Update' id='Updt' class='update'></td></form>";
                    
                    echo "</tr>";


                    echo "<tr class='row2'><form action='joinourteamdelete.php' method='POST'>";
                    echo"<td><input type='text' name='firstname' value=".$row["FirstName"]."></td>";
                    echo"<td><input type='text' name='lastname' value=".$row["SurName"]."></td>";
                    echo"<td><input type='text' name='email' value=".$row["Email"]."></td>";
                    echo"<td><input type='text' name='mobile' value=".$row["MobileNo"]."></td>";
                    echo"<td><input type='text' name='Dpt' value=".$row["Dept"]."></td>";
                   
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