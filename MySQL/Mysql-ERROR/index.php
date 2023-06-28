<?php 

$host = "localhost";
$user = "root";
$pass = '';
$db = "cursophp"

 $conn = new mysqli($host, $user, $pass, $db);

//Mostra os erro do para o usuário sem que o usuário tenha acesso a dados sensíveis
 if($conn->connect_errno) {
    echo "Erro na conexão! <br>";
    echo "Erro: " . mysqli_connect_error();
 }

//forma orientada a objetos
if($conn->connect_errno) {
    echo "Erro na conexão! <br>";
    echo "Erro: " . $conn->connect_error;
 }

?>