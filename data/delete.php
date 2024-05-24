<?php
include '../config.php';

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: ../login.php');
    exit();
}

$id = $_GET['id'];
$sql = "DELETE FROM pendaftaran WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header('Location: table.php');
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>