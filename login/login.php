<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginStyle.css">
    <title>Tela de Login</title>
</head>

<body>
    <a href="../home/home.php">Voltar</a>
    <div class="tela-login">
        <h1>Login</h1>
        <form action="testeLogin.php" method="POST">
            <input type="text" name="email" placeholder="E-mail">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>

</body>

</html>