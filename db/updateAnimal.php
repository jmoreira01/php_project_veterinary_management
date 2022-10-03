<?php
$id = $_POST['form-id'];
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


$sql = "UPDATE animal 
SET name='$name',
    data_nascimento='$data_nascimento',
    especie='$especie',
    raca='$raca',
    cor='$cor',
    peso_kg='$peso_kg',
    comprimento_cm='$comprimento_cm',
    nome_dono='$nome_dono',
    contato_dono='$contato_dono',
    contribuinte_dono='$contribuinte_dono',
    email_dono='$email_dono',
    comentario='$comentario'
WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header('Location:../index.php?p=listaanimais&r=updateok');
} else {
    header('Location:../index.php?p=registoanimais&r=updateerro');
}

$conn->close();
?>