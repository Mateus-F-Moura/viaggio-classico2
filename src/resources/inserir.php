<?php

include '../config/conexao.php';

$nome_completo = $_POST['fullName'];
$email = $_POST['email'];
$telefone = $_POST['phone'];
$destino = $_POST['destination'];
$pessoas = $_POST['people'];
$data_inicio = $_POST['dateFrom'];
$data_final = $_POST['dateTo'];
$complemento = $_POST['message'];

$sql = "INSERT INTO `viagem`(`id`, `nome`, `email`, `telefone`, `destino`, `pessoas`, `data_inicio`, `data_final`, `complemento`) 
VALUES (NULL,'$nome_completo','$email','$telefone','$destino','$pessoas','$data_inicio','$data_final','$complemento')";

$inserir = mysqli_query($conexao, $sql);

?>