<?php
session_start();
//VALIDAR SE USERNAME E PASSWORDS FORAM PREENCHIDAS
if(empty($_POST['form-username']) ||  empty($_POST['form-password']) ||  empty($_POST['form-email'])) {
    header('Location:../index.php?p=404');
    exit();
}

//LER USERNAME E PASSWORDS PARA VARIÁVEIS
$user = $_POST['form-username'];
$pass = $_POST['form-password'];
$email = $_POST['form-email'];
$useratual = $_SESSION['username'];

//USERNAME E PASSWORDS PREENCHIDOS E PASSWORDS IGUAIS
include('conn.php');

$sql = "UPDATE medicovet 
SET username='$user', 
    password= '$pass',
    email='$email'
WHERE username='$useratual'";

if ($conn->query($sql) === TRUE) {
    $_SESSION['username'] = $user;
    header('Location:../index.php?p=minhaconta&r=updateok');
} else {
    header('Location:../index.php?p=minhaconta&r=updateerro');
}

$conn->close();
?>