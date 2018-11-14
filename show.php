<?php
$servername = "peli.db";
$username = "testuser";
$password = "314159ABcd";
$dbname = "responses";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `tb_cform`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. " - Name: " . $row["u_name"]. " - Email: " . $row["u_email"]. " - message: " . $row["message"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>