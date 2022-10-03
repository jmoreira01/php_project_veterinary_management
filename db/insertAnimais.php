<?php
// print_r($_POST); die(); - dumping and die

if(empty($_POST['form-name'])
    || empty($_POST['form-data-nascimento'])
    || empty($_POST['form-especie'])
    || empty($_POST['form-raca'])
    || empty($_POST['form-cor'])
    || empty($_POST['form-peso-kg'])
    || empty($_POST['form-comprimento-cm'])
    || empty($_POST['form-nome-dono'])
    || empty($_POST['form-contato-dono'])
    || empty($_POST['form-contribuinte-dono'])
    || empty($_POST['form-email-dono'])
    || empty($_POST['form-comentario'])) {
    header('Location:../index.php?p=registoanimais&r=camposemfalta');
    exit();
}
$name = $_POST['form-name'];
$data_nascimento = $_POST['form-data-nascimento'];
$especie = $_POST['form-especie'];
$raca = $_POST['form-raca'];
$cor = $_POST['form-cor'];
$peso_kg = $_POST['form-peso-kg'];
$comprimento_cm = $_POST['form-comprimento-cm'];
$nome_dono = $_POST['form-nome-dono'];
$contato_dono = $_POST['form-contato-dono'];
$contribuinte_dono = $_POST['form-contribuinte-dono'];
$email_dono = $_POST['form-email-dono'];
$comentario = $_POST['form-comentario'];

include('conn.php');

$sql = "INSERT INTO animal(medicovet_id,name,data_nascimento, especie,raca,cor,peso_kg,comprimento_cm,nome_dono,contato_dono,contribuinte_dono,email_dono,comentario )
VALUES (2,'$name','$data_nascimento','$especie','$raca','$cor','$peso_kg','$comprimento_cm','$nome_dono','$contato_dono','$contribuinte_dono','$email_dono','$comentario')";


if ($conn->query($sql) === TRUE) {
    header('Location:../index.php?p=registoanimais&r=registook');
} else {
    header('Location:../index.php?p=registoanimais&r=registoerro');
}

$conn->close();
?>