<?php
 include_once('Conecta.php');

    $registro = $_GET['id_coleta'];

        $dados= "UPDATE tb_coleta SET resgistro = 1 WHERE id_coleta= '{$registro}'";
        $resultado_dados= mysqli_query($conexao, $dados);
        header("location: Registrar.php");
?>