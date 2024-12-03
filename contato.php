<?php

if(isset($_POST['submit']))
{
    //print_r('Nome: ' . $_POST['nome']);
    //print_r('<br>');
    //print_r('Email: ' . $_POST['email']);
    //print_r('<br>');
    //print_r('Telefone: ' . $_POST['telefone']);
    //print_r('<br>');
    //print_r('Senha: ' . $_POST['senha']);

    include_once('php\config1.php');

    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $result = mysqli_query($conexao, "INSERT INTO contato(nome, email, telefone, mensagem) 
    VALUES ('$nome', '$email', '$telefone', '$mensagem')");


}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>Contato In Nova Alumínio</title>
</head>
<body>
    <header style="background-image: url('img/Contato.png')">
    <form action="contato.php" method="POST">
        <div class="container">
            <nav>
                <a href="index.html">
                  <img src="img/Logo sem fundo .png" alt="Logo">
                </a>
                <ul class="ul">
                  <a href="index.html">Home</a>
                  <a href="sobre.html">Sobre</a>
                  <a href="servicos.html">Serviços</a>
                  <a href="peças.html">Peças</a>
                  <a href="sistema.php">Usuário</a>
                  <div class="close-icon" onclick="closeMenu()">
                    <i class="fa fa-times-circle"></i>
                  </div>
                  </ul>
                <div class="menu-icon" onclick="openMenu()">
                    <i class="fa fa-bars"></i>
                </div>
            </nav>
            <section class="banner">
                <div class="banner-text">
                    <h1>Contato In Nova Alumínio</h1>
                </div>
            </section>
        </div>
    </header>
    <section class="contato">
    <section class="contato">
        <div class="container">
            <div class="contato-info">
                <div class="left-side">
                    <div>
                        <i class="fa fa-map-marker"></i>
                        <p>Rua Cm7, Quadra 18, Lote 09, N° 387, Setor Candida de Morais- Goiânia</p>
                    </div>
                    <div>
                        <i class="fa fa-envelope"></i>
                        <p>in_novaaluminio@outlook.com</p>
                    </div>
                    <div>
                        <i class="fa fa-phone"></i>
                        <p>(62) 3271-7746</p>
                    </div>
                    <div>
                        <i class="fa fa-whatsapp"></i>
                        <p>+55 62 98517-4672</p>
                    </div>
                    <div>
                        <i class="fa fa-whatsapp"></i>
                        <p>+55 62 99822-4839</p>
                    </div>
                </div>
                <div class="right-side">
                    <form action="contato.php" method="POST">
                        <input type="text" name="nome" id="nome" placeholder="Nome" required>
                        <input type="text" name="email" id="email" placeholder="E-mail" required>
                        <input type="tel" name="telefone" id="telefone" placeholder="Telefone" required>
                        <textarea name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Sua Mensagem" required></textarea>
                        <button class="btn" type="submit" name="submit" id="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="left-side-footer">
            <div>
                <i class="fa fa-map-marker"></i>
                <p>Rua Cm7, Quadra 18, Lote 09, N° 387, Setor Candida de Morais- Goiânia</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p>in_novaaluminio@outlook.com</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>(62) 3271-7746</p>
            </div>
            <div>
                <i class="fa fa-whatsapp"></i>
                <p>+55 62 98517-4672</p>
            </div>
            <div>
                <i class="fa fa-whatsapp"></i>
                <p>+55 62 99822-4839</p>
            </div>
        </div>
        <div>
            <p class="Desenvolvido">Desenvolvido por</p>
            <p>FLÁVIA CAROLINE BORGES DE CARVALHO</p>
            <p>MARCOS DANIEL MOREIRA ALVES</p>
            <p>PAULA GOMES DA SILVA</p>
            <p>THIAGO AUGUSTO SILVA </p>
    </div>
    </form> 
    </footer>
    <script src="js/main.js"></script>
</body>
</html>