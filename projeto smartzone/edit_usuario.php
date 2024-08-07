<?php
session_start();
include_once('conexao.php');
$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2efb6f99a5.js" crossorigin="anonymous"></script>
   <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="css/global.css" rel="stylesheet" />
  <link href="css/cadlog.css" rel="stylesheet" />
    <title>Editar-grud</title>
</head>
<body>
    <h1>Editar Usuario</h1>
<?php
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>

<form action="proc_edit_usuario.php" method="post">
    <input type="hidden" name="id"value="<?php echo $row_usuario['id']; ?>">

    <label for="nome">nome:</label>
    <input type="text" name="nome"  placeholder="nome" value="<?php echo $row_usuario['nome'];?>"><br><br>

    <label for="email">email:</label>
    <input type="email" name="email" placeholder="email"  value="<?php echo $row_usuario['email'];?>"><br><br>
    <label for="endereco">endereco</label>
    <input type="tex" name="endereco" placeholder="endereco"  value="<?php echo $row_usuario['endereco'];?>"><br><br>

    <input type="submit" value="Editar">
    <a href="account.php"><input type="button" value="Voltar"></a>
</form>
</body>
</html>