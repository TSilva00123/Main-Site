<?php

session_start();
include_once('php\config.php');
//print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$logado = $_SESSION['email'];

$sql = "SELECT * FROM contato ORDER BY id DESC";

$result = $conexao->query($sql);

//print_r($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>Usuário</title>
</head>
<body class="Login">
<header style="background-image: url('img/Peças.png')">
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
                  <a href="sair.php">Sair</a>
                  <a class="btn" href="contato.php">Contato</a>
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
<?php
    echo "<h1>Bem vindo <u>$logado</u><h1>";
?>
                </div>
            </section>
        </div>

        <div class="m-5">      
        <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col">Telefone</th>
          <th scope="col">Mensagem</th>
        </tr>
      </thead>
      <tbody>
       <?php
       while($user_data = mysqli_fetch_assoc($result))
       {
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['nome']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td>".$user_data['telefone']."</td>";
        echo "<td>".$user_data['mensagem']."</td>";
        echo "<td>
        <a class='btn1 btn-primary' href='edit.php?id=$user_data[id]'>
        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
        <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
        <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'/>
        </svg>
        </a>
        <a class='btn1 btn-danger' href='edit.php?id=$user_data[id]'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
            <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/>
            <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/>
            </svg>
        </a>
        </td>";
        echo "</tr>";
       }
       ?>
      </tbody>
    </table>
        </div>
    </header>

    <script src="js/main.js"></script>
</body>
</html>