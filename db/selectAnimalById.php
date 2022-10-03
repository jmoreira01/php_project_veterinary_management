<?php
include('conn.php');

$id='id';

$sql = "SELECT * FROM animal WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 1) {
    $row = $result->fetch_assoc();
}
$conn->close();
?>


