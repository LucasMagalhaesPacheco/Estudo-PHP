<?php
$host = "localhost";
$user = "root";
$pass = '';
$db = "testandoBanco";

 $conn = new mysqli($host, $user, $pass, $db);

  // Assunto da aula
  $id = 1;
  

  $stmt = $conn->prepare("UPDATE itens SET name = ?, valor = ? where id = ?");

  $name = "Sofa";
  $valor = 5000;

  $stmt->bind_param("sii", $name, $valor, $id);

  $stmt->execute();

  if($stmt->error) {
    echo "Erro: " . $stmt->error;
  }


?>