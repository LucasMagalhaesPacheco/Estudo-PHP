<?php 

$host = "localhost";
$user = "root";
$pass = '';
$db = "testandoBanco";

$conn = new mysqli($host, $user, $pass, $db);

$id = 2;
  

$stmt = $conn->prepare("DELETE FROM itens WHERE id = ?");

$stmt->bind_param("i", $id);

$stmt->execute();

$conn->close();