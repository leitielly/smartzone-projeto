<?php
session_start();
include_once('conexao.php');
$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$endereco = filter_input(INPUT_POST,'endereco',FILTER_SANITIZE_STRING);

$create_user = "UPDATE usuarios SET nome ='$nome', email ='$email', endereco= '$endereco'";
$created_user = mysqli_query($conn, $create_user);

if(mysqli_affected_rows($conn)){
    $_SESSION['msg'] = "<p style = 'color:green;'>usuario editado  com suscesso</p>";
    header("Location: account.php");
    }else{
        $_SESSION['msg'] = "<p style = 'color:red;'>usuario Näo foi editado com suscesso</p>";
        header("Location: edit_usuario.php?id=$id");
}