<?php
session_start();
include_once('conexao.php');

$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$datanascimento= filter_input(INPUT_POST, 'datanascimento',FILTER_SANITIZE_NUMBER_INT);
$cpf= filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo',FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST,'endereco',FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST,'cep',FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_NUMBER_INT);




// inserindo dados no banco

$create_user = "INSERT INTO usuarios (nome,email,datanascimento,cpf,sexo,telefone,endereco,cep,senha) VALUES('$nome','$email','$datanascimento','$cpf','$sexo','$telefone','$endereco','$cep','$senha')";
$create_user = mysqli_query($conn,$create_user);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p8>Usuario Cadastrado com Suscesso</p8>";
    header("Location:login.php");
    }else{
        $_SESSION['msg'] = "<p style = 'color:red;'>usuario Näo foi cadastrado com suscesso</p>";
        header("Location:cadastro.php");
}

//se ususario ja tem email
$stmt1=$conn->prepare("SELECT count(*) FROM usuarios where email=?");
$stmt1->bind_param('s',$email);
$stmt1->execute();
$stmt1->bind_result($num_rows);
$stmt1->store_result();
$stmt->fetch();

if($num_rows !=0){
    header('location:cadastro.php?error=Usuario com esse email ja existe');
}else if (isset($_SESSION['logged_in'])){
    header('location:account.php');
    exit;
}