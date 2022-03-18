<?php

session_start();

$_SESSION['autenticado'] = 'nao';
$_SESSION['id'] = '';
$_SESSION['perfil'] = '';

header('location: index.php');

?>
