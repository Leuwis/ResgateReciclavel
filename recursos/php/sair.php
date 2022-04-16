<?php
session_start();

unset($_SESSION["CodUsuario"]);
unset($_SESSION["Nome"]);
header('Location: ../../index.php');
exit;
?>