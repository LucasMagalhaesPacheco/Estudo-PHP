<?php

$host = "localhost";
$user = "root";
$pass = '';
$db = "testandoBanco";

 $conn = new mysqli($host, $user, $pass, $db);


 $q = "SELECT * FROM itens";

 $result = $conn->query($q);
 
 $conn->close();


 //UM RESULTADO
 $itens = $result->fetch_assoc();


 //TODOS OS RESULTADOS 

 $itensTodos = $result->fetch_all();

 print_r($itens);

 print_r($itensTodos);