<?php
session_start();
include_once('conexao.php');

// Verifica se o usuário está logado
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

// Verifica se o ID foi passado
if (!$id) {
    $_SESSION['msg'] = "<p style='color:red;'>ID do usuário inválido.</p>";
    header("Location: edit_usuario.php?id=$id");
    exit();
}

// Prepara a consulta para atualizar o usuário
$stmt = $conn->prepare("UPDATE usuarios SET nome = ?, email = ?, endereco = ? WHERE id = ?");
$stmt->bind_param("sssi", $nome, $email, $endereco, $id);

if ($stmt->execute()) {
    // Atualiza a sessão com o novo email
    $_SESSION['email'] = $email;

    $_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso!</p>";
    header("Location: account.php");
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso.</p>";
    header("Location: edit_usuario.php?id=$id");
}

$stmt->close();
mysqli_close($conn);
?>

