<?php
if(empty($_SESSION['username'])) {
    header('Location:../index.php?p=404');
    exit();
}

$user = $_SESSION['username'];

include('conn.php');
$sql = "SELECT id,username,password,email,foto FROM medicovet WHERE username='$user'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {

    $row = $result->fetch_assoc();
} else {
    header('Location:../index.php?p=404');
}
$conn->close();
?>