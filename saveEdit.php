<?php

    include_once('php\config1.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $mensagem = $_POST['mensagem'];

        $sqlUpdate = "UPDATE * FROM contato SET nome='$nome',email= '$email',telefone= '$telefone',mensagem= '$mensagem'
        WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: sistema.php');

?>
