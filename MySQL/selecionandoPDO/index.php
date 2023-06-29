<?php


$host = "localhost";
$user = "root";
$pass = '';
$db = "testandoBanco";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$stmt = $conn->prepare("UPDATE itens SET name = :name, valor = :valor, WHERE id = :id");
$id = 1;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");

$stmt->BindParam(":id",  $id)

//Atributo PDO::FETCH_ASSOC impede de vim coisas duplicadas
$data = $stmt->fetch(PDO::FETCH_ASSOC);


print_r($data);

$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<br>";

print_r($itens);

