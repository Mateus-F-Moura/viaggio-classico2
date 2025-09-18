<?php
include '../config/conexao.php';

$id = $_POST['codigo'] ?? null;
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$data_nascimento = $_POST['data_nascimento'] ?? '';
$senha = $_POST['senha'] ?? '';

$senha_hashed = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO `users`(`id`, `nome`, `email`, `dataNascimento`, `senha`) VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if ($stmt === false) {
    error_log("Erro na preparação da consulta: " . $conn->error);
    die("Erro interno ao processar o cadastro. Tente novamente mais tarde.");
}

$sql = "INSERT INTO `users`(`nome`, `email`, `dataNascimento`, `senha`) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
if ($stmt === false) {
    error_log("Erro na preparação da consulta: " . $conn->error);
    die("Erro interno ao processar o cadastro. Tente novamente mais tarde.");
}
$stmt->bind_param("ssss", $nome, $email, $data_nascimento, $senha_hashed); // 'ssss' para 4 strings

$result = $stmt->execute();

if ($result) {
    header("Location: list.php?status=success"); // Corrigido para 'list.php'
    exit();
} else {
    error_log("Erro na execução da consulta: " . $stmt->error);
    header("Location: login.php?status=error&message=Erro ao cadastrar. Tente novamente.");
    exit();
}
?>