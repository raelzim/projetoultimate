<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <p>Altere senha</p>
    <center> 
        <form id="alterada" action="update.php" method="POST" >
            Login:<input type="text" name="login" required><br><br>
            Nova Senha:<input type="password" name="senha" required><br><br>
            <input type="submit" name="alterar" value="Alterar senha">
        </form>
</center>
</body>
</html>