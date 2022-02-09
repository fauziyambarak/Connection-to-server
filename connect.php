<?php
$servername = "localhost";
$username = "root";
$password = "";
$Database ="Fauziya";

// Create connection
$conn = new mysqli($servername, $username, $password, $Database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connection successful";
//POSTING WHAT IS IN THE FORM TO THE DATABASE
        //$id = $_REQUEST['id'];
        $b_balance =  $_REQUEST['b_balance'];
        $q_dispensed = $_REQUEST['q_dispensed'];
        $c_balance = $_REQUEST['c_balance'];
        

        $sql = "INSERT INTO patientsRecord VALUES('','$b_balance', '$q_dispensed', '$c_balance')";
        
         if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
               . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
               } else{
            echo "ERROR: Hush! Sorry $sql. " 
               . mysqli_error($conn);
               }