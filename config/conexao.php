<?php
$hostname = 'localhost';
$bancodedados = 'usuariodb';
$usuario = 'root'; // Usuário padrão do XAMPP
$senha = ''; // Senha vazia no XAMPP

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$bancodedados;charset=utf8", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>



