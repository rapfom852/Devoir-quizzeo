<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["pseudo"]);

header("Location:indexs.php");
?>