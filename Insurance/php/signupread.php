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
    $read = "SELECT Email,Password,Confirmed_password FROM signup";
    $result = $con->query($read); 
    if ($result->num_rows > 0) 
    {

        echo "<tr><th>Email</th><th>Password</th><th>Confirmed password</th><th>Action</th></tr>";
        while($row = $result->fetch_assoc()) 
        {
                    echo "<tr class='row1'><form action='signupupdate.php' method='POST'>";
                    echo"<td><input type='text' name='email' value=".$row["Email"]."></td>";
                    echo"<td><input type='text' name='password' value=".$row["Password"]."></td>";
                    echo"<td><input type='text' name='confirm' value=".$row["Confirmed_password"]."></td>";

                    echo"<td><input type='submit' name='updt' value='Update' id='Updt' class='update'></td></form>";
                    
                    echo "</tr>";

                    echo "<tr class='row2'><form action='signupdelete.php' method='POST'>";
                    echo"<td><input type='text' name='email' value=".$row["Email"]."></td>";
                    echo"<td><input type='text' name='password' value=".$row["Password"]."></td>";
                    echo"<td><input type='text' name='confirm' value=".$row["Confirmed_password"]."></td>";
                    
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