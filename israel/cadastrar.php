<?php
include ('conexao.php');

$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

// Verificar se o usuário já existe
$consulta = "SELECT * FROM login WHERE login = '$login'";
$resultado = mysqli_query($conexao, $consulta);

if (mysqli_num_rows($resultado) > 0) {
    $errorMessage = "O usuário já existe. Por favor, escolha outro login.";
} else {
    $insert = "INSERT INTO login (nome, login, senha)
               VALUES ('$nome', '$login', '$senha')";
    $query = mysqli_query($conexao, $insert);

    if ($query) {
        $errorMessage = "O usuário foi cadastrado com sucesso";
    } else {
        $errorMessage = "Ocorreu um erro ao cadastrar o usuário";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sucesso no Cadastro</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <div class="container">
        <h1 class="titulo"><?php echo isset($errorMessage) ? $errorMessage : ""; ?></h1>
        <center>
            <a href="index.php" class="button">Voltar</a>
        </center>
    </div>
</body>
</html>