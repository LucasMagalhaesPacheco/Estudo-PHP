<?php

$host = "localhost";
$user = "root";
$pass = '';
$db = "testandoBanco";

 $conn = new mysqli($host, $user, $pass, $db);
 $table  = 'itens';
 $nome = "Batata";
 $valor = 25;

 $q = "INSERT INTO $table (name, valor) VALUES ('$nome', '$valor')";


 $conn->query($q);


 $conn->close();