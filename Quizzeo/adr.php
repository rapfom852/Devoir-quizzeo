<?php
require('connect.php');

$pseudo = $_POST['nom'];
$email = $_POST['mail'];
$password =  $_POST['mdp'];
$role = 3;



$sql = "INSERT INTO user(pseudo, email, pass_word, ro_le)VALUES ('$pseudo', '$email', '".$password."','$role')";
$result = $conn->query($sql);


header("Location:quiza.php");
?>
