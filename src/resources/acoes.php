<?php
session_start();
require '../config/conexao.php';

if (isset($_POST['create_usuario'])) {
    $nome = mysqli_real_escape_string($conexao, trim($_POST['fullName']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $telefone = mysqli_real_escape_string($conexao, trim($_POST['phone']));
    $destino = mysqli_real_escape_string($conexao, trim($_POST['destination']));
    $pessoas = mysqli_real_escape_string($conexao, trim($_POST['people']));
    $data_inicio = mysqli_real_escape_string($conexao, trim($_POST['dateFrom']));
    $data_final = mysqli_real_escape_string($conexao, trim($_POST['dateTo']));
    $complemento = mysqli_real_escape_string($conexao, trim($_POST['message']));

    $sql = "INSERT INTO viagem (nome, email, telefone, destino, pessoas, data_inicio, data_final, complemento) 
            VALUES ('$nome', '$email', '$telefone', '$destino', '$pessoas', '$data_inicio', '$data_final', '$complemento')";

    if (mysqli_query($conexao, $sql)) {
        $_SESSION['mensagem'] = "Usuário criado com sucesso!";
        header('Location: ../pages/list.php');
        exit();
    } else {
        $_SESSION['mensagem'] = "Erro ao criar usuário: " . mysqli_error($conexao);
        header('Location: ../pages/forms.php');
        exit();
    }
}


if (isset($_POST['update_usuario'])) {
    $usuario_id = mysqli_real_escape_string($conexao, $_POST['usuario_id']);
    $nome = mysqli_real_escape_string($conexao, trim($_POST['fullName']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $telefone = mysqli_real_escape_string($conexao, trim($_POST['phone']));
    $destino = mysqli_real_escape_string($conexao, trim($_POST['destination']));
    $pessoas = mysqli_real_escape_string($conexao, trim($_POST['people']));
    $data_inicio = mysqli_real_escape_string($conexao, trim($_POST['dateFrom']));
    $data_final = mysqli_real_escape_string($conexao, trim($_POST['dateTo']));
    $complemento = mysqli_real_escape_string($conexao, trim($_POST['message']));

    $sql = "UPDATE viagem SET nome = '$nome', email = '$email', telefone = '$telefone', destino = '$destino', pessoas = '$pessoas', data_inicio = '$data_inicio', data_final = '$data_final', complemento = '$complemento' WHERE id = '$usuario_id'";

    if (mysqli_query($conexao, $sql)) {
        $_SESSION['mensagem'] = "Usuário atualizado com sucesso!";
        header('Location: ../pages/list.php');
        exit();
    } else {
        $_SESSION['mensagem'] = "Erro ao atualizar usuário: " . mysqli_error($conexao);
        header('Location: ../pages/forms.php');
        exit();
    }
}

if (isset($_POST['delete_usuario'])) {
    $usuario_id = mysqli_real_escape_string($conexao, $_POST['delete_usuario']);

    $sql = "DELETE FROM viagem WHERE id = '$usuario_id'";

    if (mysqli_query($conexao, $sql)) {
        $_SESSION['mensagem'] = "Usuário excluído com sucesso!";
        header('Location: ../pages/list.php');
        exit();
    } else {
        $_SESSION['mensagem'] = "Erro ao excluir usuário: " . mysqli_error($conexao);
        header('Location: ../pages/list.php');
        exit();
    }
}
?>