<?php

if(isset($_GET['nome']) && isset($_GET['idade']))

 print_r($_GET);
$nome = $_GET['nome'];
$idade = $_GET['idade'];
?>

<h1> seu nome é <?php echo $nome ?> e sua idade é <?php echo $idade ?> </h1>

