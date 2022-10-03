<?php
//VALIDAR SE CAMPOS FORAM PASSADOS
if(empty($_GET['id']) ||  empty($_GET['tipo'])) {
    header('Location:../index.php?p=404');
    exit();
}

//LER PARA VARIÁVEIS
$id = $_GET['id'];
$tipo = $_GET['tipo'];

include('conn.php');

$sql = "UPDATE utilizador SET tipoUtilizador_id=$tipo WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location:../index.php?p=administracao&r=updateok');
} else {
    header('Location:../index.php?p=administracao&r=updateerro');
}

$conn->close();
?>