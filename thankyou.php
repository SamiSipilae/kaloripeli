<?php
require 'connection.php';
$name = $_POST['u_name'];
$email = $_POST['u_email'];
$tel = $_POST['tel'];
$uutis = $_POST['uutiskirje'];
$yhteydenotto = $_POST['yhteydenotto'];
$message = $_POST['message'];

$conn = Connect();

$query = "INSERT into tb_cform (u_name,u_email,tel,uutis,yhteydenotto,message) VALUES('" . $name . "','" . $email . "','" . $tel . "','" . $uutis . "','" . $yhteydenotto . "','" . $message . "')";
$success = $conn->query($query);

if (!$success) {
 die("Couldn't enter data:");

}

echo "Thank You For Contacting Us <br>";

$conn->close();
header("Location: index.html"); /* Redirect browser */
exit();

?>