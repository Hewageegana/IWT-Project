<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../styles/claim_php.css">


    
    <title>insurance pvt.Ltd/header&footer</title>

        <!-- >Font awesome site link to get some social media logoes<-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity=crossorigin="anonymous">

    <!-- >google fonts<-->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital@0;1&display=swap" rel="stylesheet">

    
    <!-- >Header & Footer css files<-->
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/slider.css">
    
</head>


<body>



<header class="header">
    <div class="hlogo">
        <img src="../images/logo.jpg">
    </div>
    <i class="fa fa-bars menu-toggle"></i>

    <ul class="nav">
        
        <li class="linein"><a href="homepage.html">Home</a></li>
        <li class="linein"><a href="online payment.html">Make A Online Payment</a></li>
        <li class="linein"><a href="Make_a_claim.html">Make A Claim</a></li>
        <li class="linein"><a href="ourstory.html">Our Story</a></li>
        <li class="linein"><a href="approvedgarages.html">Services</a></li>

        

        <li class="linein">
            <a href="#">
                <i class="fa fa-user"></i>
            
            <i class="fa fa-chevron-down"style="font-size: .8em;"></i>
        </a>
            <ul>
                <li class="linein"><a href="loginform.html">Dashboard</a></li>
                <li class="linein"><a href="#" class="">Preferences</a></li>
                <li class="linein"><a href="#" class="">Settings</a></li>
                <li class="linein"><a href="#" class="logout">Signout</a></li>
            </ul>
        </li>
    

    </ul>
</header><br><br>







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

    	echo "<tr><th>Name</th><th>MobileNo</th><th>Email</th><th>PolicyNo</th><th>Action</th></tr>";
        while($row = $result->fetch_assoc()) 
        {
        			echo "<tr class='row1'><form action='claimupdate.php' method='POST'>";
                    echo"<td><input type='text' name='name' value=".$row["Name"]."></td>";
                    echo"<td><input type='text' name='mobile' value=".$row["MobileNo"]."></td>";
                    echo"<td><input type='text' name='email' value=".$row["Email"]."></td>";
                    echo"<td><input type='text' name='policy' value=".$row["PolicyNo"]."></td>";
                   
                    echo"<td><input type='submit' name='updt' value='Update' id='Updt' class='update'></td></form>";
                  
                    echo "</tr>";


        			echo "<tr class='row2'><form action='claimdelete.php' method='POST'>";
                    echo"<td><input type='text' name='name' value=".$row["Name"]."></td>";
                    echo"<td><input type='text' name='mobile' value=".$row["MobileNo"]."></td>";
                    echo"<td><input type='text' name='email' value=".$row["Email"]."></td>";
                    echo"<td><input type='text' name='policy' value=".$row["PolicyNo"]."></td>";
                   
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