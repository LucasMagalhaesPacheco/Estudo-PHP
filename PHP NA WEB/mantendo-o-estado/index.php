<?php

setcookie("name", "Lucas", time() + 3600);
 if(isset($_COOKIE['name'])) {

    $name = $_COOKIE['name'];
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
<h1>Olá Mundo</h1>
<?php if($name != ""): ?>
  <p>Seja bem vindo <?php echo $name ?></p>

<?php endif; ?>
</body>
</html>