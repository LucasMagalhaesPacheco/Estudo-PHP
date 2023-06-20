<?php
$validacoes = [];

if(count($_POST) > 0) {


    if(($_POST["nome"]) === "") {
        $validacoes[] = "pOR FAVOR, PREENCHA O NOME DO USUÁRIO!";
    };

    if(($_POST["idade"]) === "") {
        $validacoes[] = "pOR FAVOR, PREENCHA a idade do usuário!";
    };

    if(($_POST["senha"]) === "") {
        $validacoes[] = "pOR FAVOR, PREENCHA O senha DO USUÁRIO!";
    };

    if(($_POST["confirmacao"]) === "") {
        $validacoes[] = "pOR FAVOR, CONFIRME A SENHA!";
    };
    
    if($_POST["senha"] != $_POST["confirmacao"] ) {
        $validacoes[] = "A senha tem que ser igual!";
    };
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php if(count($validacoes)): ?>
 <ul>
    <?php foreach($validacoes as $validacao): ?>
    <li><?php echo $validacao ?></li>
     
    <?php endforeach; ?>    
 </ul>
 <?php endif; ?>
<form action="index.php" method="POST">
<div>
    <input type="text" name="nome" placeholder="nome">
</div>
<div>
    <input type="number" name="idade" placeholder="idade">
</div>
<div>
    <input type="password" name="senha" placeholder="senha">
</div>
<div>
    <input type="password" name="confirmacao" placeholder="confirme sua senha">
</div>
<div>
    <input type="submit" value="enviar">
</div>
</form>    
</body>
</html>