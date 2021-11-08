<!DOCTYPE html>
<html>
<head>
	<title></title>

    <link rel="stylesheet" href="../styles/claim_php.css">
</head>
<body>

<center>
	<h1 style="font-family: verdana; font-weight: 100; color: red;">MOTOR QUOTATION</h1>
	<table border="2" style="font-family: verdana; font-size: 14px;"></center>

<?php

require 'config.php';

function readData(){
	
	GLOBAL $con;
    $read = "SELECT vehicle_type,Make,Model,Year_of_Manufactured,Fuel_type,Sumn_insured,Promo_code FROM mortor_quotation";
    $result = $con->query($read); 
    if ($result->num_rows > 0) 
    {

    	echo "<tr><th>vehicle_type</th><th>Make</th><th>Model</th><th>Year_of_Manufactured</th><th>Fuel_type</th><th>Sumn_insured</th><th>Promo_code</th></tr>";
        while($row = $result->fetch_assoc()) 
        {
                    echo "<tr class='row1'><form action='mortorquatationupdate.php' method='POST'>";
        	        echo"<td><input type='text' name='vehicle' value=".$row["vehicle_type"]."></td>";
                    echo"<td><input type='text' name='make' value=".$row["Make"]."></td>";
                    echo"<td><input type='text' name='model' value=".$row["Model"]."></td>";
                    echo"<td><input type='text' name='year' value=".$row["Year_of_Manufactured"]."></td>";
                    echo"<td><input type='text' name='fuel' value=".$row["Fuel_type"]."></td>";
                    echo"<td><input type='text' name='sum' value=".$row["Sumn_insured"]."></td>";
                    echo"<td><input type='text' name='promo' value=".$row["Promo_code"]."></td>";
                   
                    echo"<td><input type='submit' name='updt' value='Update' id='Updt' class='update'></td></form>";
 
                  

                    echo "<tr class='row2'><form action='mortorquatationdelete.php' method='POST'>";
                    echo"<td><input type='text' name='vehicle' value=".$row["vehicle_type"]."></td>";
                    echo"<td><input type='text' name='make' value=".$row["Make"]."></td>";
                    echo"<td><input type='text' name='model' value=".$row["Model"]."></td>";
                    echo"<td><input type='text' name='year' value=".$row["Year_of_Manufactured"]."></td>";
                    echo"<td><input type='text' name='fuel' value=".$row["Fuel_type"]."></td>";
                    echo"<td><input type='text' name='sum' value=".$row["Sumn_insured"]."></td>";
                    echo"<td><input type='text' name='promo' value=".$row["Promo_code"]."></td>";
                   
                   echo"<td><input type='submit' name='delt' value='Delete' id='Delt' class='delete'></td></form>";
			

			
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