<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="../styles/claim_php.css">
</head>
<body>

<center>
    <h1 style="font-family: verdana; font-weight: 100; color: red;">ONLINE PAYMENT</h1>
    <table border="2" style="font-family: verdana; font-size: 14px;"></center>

<?php

require 'config.php';

function readData(){
    
    GLOBAL $con;
    $read = "SELECT Name,Payment_with,User_Groups,Description,Payment_Method,Card_Holders_Name,Card_Number,Expired_date,CV FROM payment";
    $result = $con->query($read); 
    if ($result->num_rows > 0) 
    {

        echo "<tr><th>Name</th><th>Payment_with</th><th>User_Groups</th><th>Description</th><th>Payment_Method</th><th>Card_Holders_Name</th><th>Card_Number</th><th>Expired_date</th><th>CV</th></tr>";
        while($row = $result->fetch_assoc()) 
        {
                    echo "<tr class='row1'><form action='onlinepaymentupdate.php' method='POST'>";
                    echo"<td><input type='text' name='name' value=".$row["Name"]."></td>";
                    echo"<td><input type='text' name='payment' value=".$row["Payment_with"]."></td>";
                    echo"<td><input type='text' name='groups' value=".$row[" User_Groups"]."></td>";
                    echo"<td><input type='text' name='description' value=".$row["Description"]."></td>";
                    echo"<td><input type='text' name='method' value=".$row["Payment_Method"]."></td>";
                    echo"<td><input type='text' name='cname' value=".$row["Card_Holders_Name"]."></td>";
                    echo"<td><input type='text' name='cardnumber' value=".$row["Card_Number"]."></td>";
                    echo"<td><input type='text' name='date' value=".$row["Expired_date"]."></td>";
                    echo"<td><input type='text' name='cv' value=".$row["CV"]."></td>";
                   
                    echo"<td><input type='submit' name='updt' value='Update' id='Updt' class='update'></td></form>";
                    
                    echo "</tr>";

                    echo "<tr class='row1'><form action='onlinepaymentdelete.php' method='POST'>";
                    echo"<td><input type='text' name='name' value=".$row["Name"]."></td>";
                    echo"<td><input type='text' name='payment' value=".$row["Payment_with"]."></td>";
                    echo"<td><input type='text' name='groups' value=".$row[" User_Groups"]."></td>";
                    echo"<td><input type='text' name='description' value=".$row["Description"]."></td>";
                    echo"<td><input type='text' name='method' value=".$row["Payment_Method"]."></td>";
                    echo"<td><input type='text' name='cname' value=".$row["Card_Holders_Name"]."></td>";
                    echo"<td><input type='text' name='cardnumber' value=".$row["Card_Number"]."></td>";
                    echo"<td><input type='text' name='date' value=".$row["Expired_date"]."></td>";
                    echo"<td><input type='text' name='cv' value=".$row["CV"]."></td>";
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