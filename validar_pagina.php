<?php
session_start();

if ($_SESSION['autenticado'] == 'nao') {
    header('location: index.php?login=erro2');    
} 
?>