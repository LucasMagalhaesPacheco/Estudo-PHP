<?php 

$host = "localhost";
$user = "root";
$pass = '';
$db = "testandoBanco";

 $conn = new mysqli($host, $user, $pass, $db);

// Assunto da Aula

$sql = "SELECT * FROM itens";

$result = $conn->query($sql);


print_r($result);

$conn->close();

?>