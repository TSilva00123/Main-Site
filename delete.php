<?php

    if(!empty($_GET['id']))
    {
        include_once('php\config1.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM contato WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM contato WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: sistema.php');

?>