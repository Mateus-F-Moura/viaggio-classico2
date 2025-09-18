<?php

include '../config/conexao.php';

$id = $_POST['codigo'] ?? '';
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$data_nascimento = $_POST['data_nascimento'] ?? '';
$senha = $_POST['senha'] ?? '';

$sql = "INSERT INTO `users`(`id`, `nome`, `email`, `dataNascimento`, `senha`) VALUES ('$id','$nome','$email','$data_nascimento','$senha')";

$stmt = $conn->prepare($sql);

if ($stmt === false) {
    error_log("Erro na preparação da consulta: " . $conn->error);
    die("Erro interno ao processar o cadastro. Tente novamente mais tarde.");
}

$stmt->bind_param("ssssssssss", $email, $nome, $data_nascimento, $cep, $endereco, $numero, $complemento, $bairro, $cidade, $estado);

$result = $stmt->execute();

if ($result) {
    header("Location: lista.php?status=success");
    exit();
} else {
    error_log("Erro na execução da consulta: " . $stmt->error);
    header("Location: login.php?status=error&message=Erro ao cadastrar. Tente novamente.");
    exit();
}
?>