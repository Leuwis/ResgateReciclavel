<?php
//session_start();

unset($_SESSION["CodUsuario"]);
unset($_SESSION["Nome"]);
unset($_SESSION['CEP']);
unset($_SESSION['Estado']);
unset($_SESSION['Municipio']);
unset($_SESSION['Bairro']);
unset($_SESSION['Rua']);
unset($_SESSION['Numero']);


header('Location: index.php');
exit;
?>