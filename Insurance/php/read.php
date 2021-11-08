<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<center>
	<h1 style="font-family: verdana; font-weight: 100; color: red;">MOTOR CLAIMS</h1>
	<table border="2" style="font-family: verdana; font-size: 14px;"></center>

<?php

require 'config.php';

function readData(){
	
	GLOBAL $con;
    $read = "SELECT Name,MobileNo,Email,PolicyNo FROM make_a_claim";
    $result = $con->query($read);
    if ($result->num_rows > 0) 
    {

    	echo "<tr><th>Name</th><th>MobileNo</th><th>Email</th><th>PolicyNo</th></tr>";
        while($row = $result->fetch_assoc()) 
        {
        	echo "<tr>";
            echo "<td>" .$row["Name"]."</td>";
			echo "<td>" .$row["MobileNo"]."</td>";
			echo "<td> " .$row["Email"]."</td>";
			echo "<td>" .$row["PolicyNo"]."</td>";
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