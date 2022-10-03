<?php
include('conn.php');

$sql = "UPDATE utilizador SET password='$novaPass' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
} else {
    header('Location:../index.php?p=administracao&r=updateerro');
}

$conn->close();
?>