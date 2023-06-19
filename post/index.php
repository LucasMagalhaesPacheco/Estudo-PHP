<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="processamento.php" method="POST">
<div>
    <input type="text"  name="nome" placeholder="Preencha seu nome"/>
</div>
<div>
    <input type="number"  name="idade" placeholder="Preencha sua idade"/>
    
</div>
<div>
    <input type="checkbox"  name="opcionais[]" value="cabelo"/> Cabelo
    <input type="checkbox"  name="opcionais[]" value="Barba"/> Barba
    <input type="checkbox"  name="opcionais[]" value="Pika"/> Pika
</div>
<div>
   <input type="submit"  value="enviar"/>
</div>
   </form> 
</body>
</html>
