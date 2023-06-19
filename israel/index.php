<link rel="icon" type="image/png" href="https://www.shareicon.net/data/128x128/2015/10/03/111567_development_512x512.png"/>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel= "stylesheet" href= "estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto A3 MANHÃ</title>
</head>
<body>
    Olá,
    <?php
    if(isset($_SESSION['nome'])==null){
        ?>
        visitante <br>
        <a href="login.php"><input type="submit" name="login" value="Login"><br><br>
        <?php
    }else {
        echo $_SESSION['nome'];?>
        <a href="cadastro.php"><input type="submit" name="cadastrar" value="Cadastrar"><br><br>
        <a href="logout.php"><input type="submit" name="sair" value="Sair"><br><br>
        <a href="alterar_senha.php">Alterar Senha</a><br>
        <a  href="lista_usuario.php">Lista de usuarios</a><br>
        <?php } ?>
        <progress value="50" max="100"></progress>
</body>
</html>