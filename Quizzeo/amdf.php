<?php
require('connect.php');
session_start();

$pseudo = $_POST['nom'];
$email = $_POST['mail'];
$password =  $_POST['mdp'];
$role = 3;

$sql = "UPDATE user SET pseudo = $pseudo, email = $email, pass_word ='".$password."'  WHERE id = ".$_SESSION["id"]." ";

$result = $conn->query($sql);


header("Location:profilea.php");
?>
