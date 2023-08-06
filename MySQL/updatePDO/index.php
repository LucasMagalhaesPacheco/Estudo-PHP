<?php
$host = "localhost";
$user = "root";
$pass = '';
$db = "testandoBanco";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$stmt = $conn->prepare("UPDATE itens SET name = :name, valor = :valor, WHERE id = :id");
$id = 1;
$name = "Suporte monitor Abajur";
$valor = 15;
$stmt->bindParam(":id", $id)
$stmt->bindParam(":name", $name);
$stmt->bindParam(":valor", $valor);