<?php
$dbHost = 'LocalHost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'cadastro';

$conexao = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

if ($conexao->connect_errno)
{
    echo "Erro";

}
else
{
    //echo "Conexão efetuada com sucesso";
}
?>