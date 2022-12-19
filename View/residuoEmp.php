<?php
include_once('conecta.php');
$residuos = mysqli_real_escape_string($conexao, trim($_POST['residuoEmp']));

session_start();
$email= $_SESSION['empresa'];

    $consulta= "SELECT id_empresa FROM tb_empresa where email_empresa= '{$email}'";
    $seleciona= $conexao->query($consulta);
    while($empresa = $seleciona->fetch_assoc()){ 
    $emp= $empresa["id_empresa"];
    }


    $endereco = "INSERT INTO tb_empresa_residuo (id_empresa, id_residuo) VALUES ('$emp','$residuos')";
  
    if (mysqli_query($conexao, $endereco)) { 
            echo "<script>
                    alert('Resíduo cadastrado com sucesso!');
                    window.location.href='Adicionarendereco.php';
                </script>"; 
} 
?>

