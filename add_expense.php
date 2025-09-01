<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $amount = $_POST['amount'];

    $stmt = $conn->prepare("INSERT INTO expenses (title, amount) VALUES (?, ?)");
    $stmt->bind_param("sd", $title, $amount);
    $stmt->execute();

    header("Location: index.php");
    exit();
}
?>
