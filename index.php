<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/style.css">
    <title>Document</title>
</head>
<body>
    


<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}
?>

<div class="container">
    <p class="bem-vindo">Bem-vindo, <?= $_SESSION["user_nome"] ?>!</p>
    <a href="logout.php" class="sair">Sair</a>
</div>


<!--<p class="bem-vindo">Bem-vindo, <?= $_SESSION["user_nome"] ?>!</p>
<a href="logout.php">Sair</a>-->

</body>
</html>