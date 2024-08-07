<?php
session_start();
include_once('conexao.php');

// Filtra o ID da URL
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

// Verifica se o ID é válido
if (!$id) {
    $_SESSION['msg'] = "<p style='color:red;'>ID inválido.</p>";
    header('Location: account.php');
    exit();
}

// Consulta o usuário com o ID fornecido
$result_usuario = "SELECT * FROM usuarios WHERE id = ?";
$stmt = $conn->prepare($result_usuario);
$stmt->bind_param("i", $id);
$stmt->execute();
$resultado_usuario = $stmt->get_result();

if ($resultado_usuario->num_rows === 0) {
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não encontrado.</p>";
    header('Location: account.php');
    exit();
}

$row_usuario = $resultado_usuario->fetch_assoc();
$stmt->close();
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
    <title>Editar Usuário</title>
</head>
<body>
<div class="container text-center mt-3 pt-5">
            <h1 class="form-weight-bold">Editar Usuario</h1>
            <hr id="traco" class="mx-auto">
     <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    </div>
    <div class="mx-auto container">
    <form id="login-form" action="proc_edit_usuario.php" method="post">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($row_usuario['id']); ?>">
        <div class="form_grupo">
        <label>Nome:</label><br>
        <input type="text"class="form_input"  name="nome" placeholder="Nome" value="<?php echo htmlspecialchars($row_usuario['nome']); ?>">
        </div>
        <div class="form_grupo">
        <label >Email:</label><br>
        <input type="email"class="form_input"  name="email" placeholder="Email" value="<?php echo htmlspecialchars($row_usuario['email']); ?>">
        </div>
        <div class="form_grupo">
        <label>Endereço:</label><br>
        <input type="text" class="form_input" name="endereco" placeholder="Endereço" value="<?php echo htmlspecialchars($row_usuario['endereco']); ?>">
        </div>
        <div class="form_grupo">
        <input type="submit"class="ntb" value="Editar">
        <a href="account.php"><input type="button"class="ntb" value="Voltar"></a>
        </div>
    </form>
    </div>
</body>
</html>
