<?php

 
 $method = $_SERVER["REQUEST_METHOD"];

 if(isset($_POST['nome'])) {
    $nome = $_POST['nome'];
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>
<body>
<?php 
 if($method == 'GET'):
?>
<form action="index.php" method="POST">
<div>
    <input type="text"  name="nome" placeholder="Preencha seu nome"/>
</div>
<div>
    <input type="number"  name="idade" placeholder="Preencha sua idade"/>
    
</div>
<input type="submit"  value="Enviar" />
</form>
 <?php 
  else:
 ?>
<h1

 <?php 
 endif;
 ?>
</body>
</html>