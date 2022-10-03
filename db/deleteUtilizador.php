<?php
session_start();
//VALIDAR SE USERNAME EXISTE (UTILIZADOR AUTENTICADO)
if(empty($_SESSION['username'])) {
    header('Location:../index.php?p=inicio');
    exit();
}

//LER USERNAME
$user = $_SESSION['username'];

include('conn.php');

$sql = "DELETE FROM medicovet WHERE username='$user'";

if ($conn->query($sql) === TRUE) {
    header('Location:../index.php?p=logout&r=deleteok');
} else {
    header('Location:../index.php?p=404');
}

$conn->close();
?>