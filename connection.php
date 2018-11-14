<?php
 
 
function Connect()
{
 $dbhost = "peli.db";
 $dbuser = "testuser";
 $dbpass = "";
 $dbname = "responses2";
 
 // Create connection
 
 // Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
 return $conn;
}
 
?>