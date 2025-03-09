<?php
session_start();
require '../config/conexao.php';

if (!isset($_SESSION["user_id"]) || $_SESSION["user_tipo"] !== 'admin') {
    header("Location: ../index.php");
    exit;
}

$stmt = $pdo->query("SELECT id, nome, email, tipo FROM usuarios");
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Painel de Administração</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Tipo</th>
    </tr>
    <?php foreach ($usuarios as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['nome'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['tipo'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="../logout.php">Sair</a>
