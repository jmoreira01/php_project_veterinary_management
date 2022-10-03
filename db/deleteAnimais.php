<?php

$id = $_GET['id'];

include('conn.php');

$sql = "DELETE FROM animal WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location:../index.php?p=logout&r=deleteok');
} else {
    header('Location:../index.php?p=404');
}

$conn->close();
?>