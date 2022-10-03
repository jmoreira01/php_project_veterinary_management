<?php
//VALIDAR SE CAMPOS FORAM PASSADOS
if(empty($_POST['form-id'])) {
    header('Location:../index.php?p=404');
    exit();
}

//LER PARA VARIÁVEIS
$id = $_POST['form-id'];

include('conn.php');

$sql = "UPDATE utilizador SET foto='u$id.png' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location:../index.php?p=administracao&r=updateok');
} else {
    header('Location:../index.php?p=administracao&r=updateerro');
}

$conn->close();
?>