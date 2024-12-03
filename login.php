<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="Login" style="background-image: url('img/Contato.png')">
    <a class="buttonlogin" href="index.html">Voltar</a>
    <div class="LoginDiv">
        <h1>Entrar</h1>
        <form action="testeLogin.php" method="POST">
        <input class="loginin" type="text" name="email" placeholder="Email">
        <br><br>
        <input class="loginin" type="password" name="senha" placeholder="Senha">
        <br><br>
        <input class="buttonlogin" type="submit" name="submit" value="Enviar">
        </form>
    </div>
    <script src="js/main.js"></script>
</body>
</html>