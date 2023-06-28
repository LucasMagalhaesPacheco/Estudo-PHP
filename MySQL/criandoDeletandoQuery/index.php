<?php 

$host = "localhost";
$user = "root";
$pass = '';
$db = "testandoBanco";

 $conn = new mysqli($host, $user, $pass, $db);

//  $create = "CREATE TABLE teste (name VARCHAR(100), sobrenome VARCHAR(100))";
 $delete = "DROP TABLE teste";

 $conn->query($delete);

 $conn->close();