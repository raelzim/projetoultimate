<?php
$conexao = mysqli_connect('localhost','root', '', 'bancoa3', '3306');
if(!$conexao){
    die('Banco de dados em manutenção');
}
?>