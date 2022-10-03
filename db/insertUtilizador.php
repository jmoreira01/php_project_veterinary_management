<?php
//VALIDAR SE USERNAME E PASSWORDS FORAM PREENCHIDAS
if(empty($_POST['form-username']) ||  empty($_POST['form-password']) || empty($_POST['form-password1'])) {
    header('Location:../index.php?p=registo&r=camposemfalta');
    exit();
}

//LER USERNAME E PASSWORDS PARA VARIÁVEIS
$user = $_POST['form-username'];
$pass1 = $_POST['form-password'];
$pass2 = $_POST['form-password1'];

//COMPARAR PASSWORDS E VERIFICAR SE SÃO OU NÃO IGUAIS
if($pass1!=$pass2){
    header('Location:../index.php?p=registo&r=pwderrada');
    exit();
}

//USERNAME E PASSWORDS PREENCHIDOS E PASSWORDS IGUAIS
include('conn.php');

$sql = "INSERT INTO medicovet (username, password, tipoUtilizador_id)
VALUES ('$user', '$pass1', 2)";

if ($conn->query($sql) === TRUE) {
    header('Location:../index.php?p=login&r=registook');
} else {
    header('Location:../index.php?p=registo&r=usernameexistente');
}

$conn->close();
?>