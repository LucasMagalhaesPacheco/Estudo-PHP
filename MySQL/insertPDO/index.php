<?php
$host = "localhost";
$user = "root";
$pass = '';
$db = "testandoBanco";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$stmt = $conn->prepare("INSERT INTO itens (name, valor) VALUES (:name, :valor)");

$name = "Suporte monitor";
$valor = 15;

$stmt->bindParam(":name", $name);
$stmt->bindParam(":valor", $valor);

$stmt->execute();