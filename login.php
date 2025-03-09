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
require 'config/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $senha = trim($_POST["senha"]);

    $stmt = $pdo->prepare("SELECT id, nome, senha, tipo FROM usuario WHERE email = ?");
    $stmt->execute([$email]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$usuario) {
        echo "Usuário não encontrado!";
        exit;
    }
    

    if ($usuario && password_verify($senha, $usuario["senha"])) {
        $_SESSION["user_id"] = $usuario["id"];
        $_SESSION["user_nome"] = $usuario["nome"];
        $_SESSION["user_tipo"] = $usuario["tipo"];

        header("Location: index.php");
        exit;
    } else {
        echo "E-mail ou senha incorretos!";
    }
}
?>

<form method="POST" class="formulario">
    E-mail: <input type="email" name="email" required><br>
    Senha: <input type="password" name="senha" required><br>
    <button type="submit">Entrar</button>
    <button type="submit"><a href="registro.php">Cadastro</a></button>
</form>

</body>
</html>
