<?php
session_start();
include_once('conexao.php');

// Obtém os dados do formulário
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$datanascimento = filter_input(INPUT_POST, 'datanascimento', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

// Verifica se o email já existe
$stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Email já está registrado
    $_SESSION['msg'] = "<p7 style='color:red;'>O email já está em uso.</p7>";
    header("Location: cadastro.php");
    exit();
}

// Insere o novo usuário
$stmt = $conn->prepare("INSERT INTO usuarios (nome, email, datanascimento, cpf, sexo, telefone, endereco, cep, senha) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssss", $nome, $email, $datanascimento, $cpf, $sexo, $telefone, $endereco, $cep, $senha);

if ($stmt->execute()) {
    $_SESSION['msg'] = "<p8 style='color:green;'> Sucesso cadastrar usuário!</p8>";
    header("Location: login.php");
} else {
    $_SESSION['msg'] = "<p8 style='color:red;'>Erro ao cadastrar usuário.</p8>";
    header("Location: cadastro.php");
}

$stmt->close();
mysqli_close($conn);
?>
