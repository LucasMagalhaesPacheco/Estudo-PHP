<?php

$host = "localhost";
$user = "root";
$pass = '';
$db = "testandoBanco";

 $conn = new mysqli($host, $user, $pass, $db);


 //Assunto da Aula
 $name = "Abajur";
 $valor = 1210;

 $stmt = $conn->prepare("INSERT INTO itens (name, valor) VALUES (?, ?)");

 $stmt->bind_param("si", $name, $valor); // s = string, i = integer, d = double

 $stmt->execute();

 $conn->close();
 
?>