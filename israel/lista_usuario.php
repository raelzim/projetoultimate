<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <div class="container">
        <h1 class="titulo">Lista de usarios</h1>

        <?php
        include('conexao.php');

        // Verifica se houve erro na conexão
        if ($conexao->connect_error) {
            die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
        }

        // Consulta os cadastros na tabela "login"
        $sql = "SELECT * FROM login";
        $resultado = $conexao->query($sql);

        // Verifica se há registros retornados pela consulta
        if ($resultado->num_rows > 0) {
            // Exibe os dados de cada registro
            while ($row = $resultado->fetch_assoc()) {
                echo "Nome: " . $row["nome"] . "<br>";
                echo "Login: " . $row["login"] . "<br>";
                echo "<br>";
            }
        } else {
            echo "Nenhum cadastro encontrado.";
        }

        // Fecha a conexão com o banco de dados
        $conexao->close();
        ?>
        <a href="index.php" class="button">Voltar</a>
    </div>
</body>
</html>
