<link rel="icon" type="image/png" href="https://www.shareicon.net/data/128x128/2015/10/03/111567_development_512x512.png"/>
<link rel= "stylesheet" href= "estilo.css">
<?php

include('conexao.php');

$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$select= "SELECT nome, login, senha FROM login
          WHERE login = '$login' AND senha = '$senha'";
$query= mysqli_query($conexao, $select);
$dados= mysqli_fetch_row($query);

if ($login==$dados[1] && $senha==$dados[2]) {
    session_start();
    $_SESSION['nome'] = $dados[0];
    header('Location: index.php');
} else {
    header('Location: login.php');
}
?>