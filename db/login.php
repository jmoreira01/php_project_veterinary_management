<?php
//VALIDAR SE USERNAME E PASSWORDS FORAM PREENCHIDAS
if(empty($_POST['form-username']) ||  empty($_POST['form-password'])) {
    header('Location:../index.php?p=login&r=camposemfalta');
    exit();
}

//LER USERNAME E PASSWORDS PARA VARIÁVEIS
$user = $_POST['form-username'];
$pass = $_POST['form-password'];

include('conn.php');
$sql = "SELECT * FROM medicovet WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    //LOGIN VÁLIDO
    session_start();
    $row = $result->fetch_assoc();
    //$_SESSION['id']=$row['id'];   //gravar id do utilizador na sessão
    $_SESSION['username']=$user;
    $_SESSION['tipoUtilizador'] = $row['tipoUtilizador_id'];
    header('Location:../index.php?p=minhaconta');
} else {
    header('Location:../index.php?p=login&r=loginerrado');
}
$conn->close();
?>