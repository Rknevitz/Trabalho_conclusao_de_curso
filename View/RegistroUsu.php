<?php
include 'conecta.php';
    $email = mysqli_real_escape_string($conexao, trim($_POST['emailEmp']));
    $nomeres = mysqli_real_escape_string($conexao, trim($_POST['nomeRes']));
    $datetime = mysqli_real_escape_string($conexao, trim($_POST['datetime']));
    
    
    session_start();
    $S=$_SESSION['usuario'];

    $resultado = "SELECT id_usuario from tb_usuario where email_usuario = '{$S}'";
    $seleciona= $conexao->query($resultado);
     while($usuario = $seleciona->fetch_assoc()){ 
        $usu= $usuario["id_usuario"];
     }
    $sql = "INSERT INTO tb_coleta (id_usuario, id_empresa, id_residuo, d_data, resgistro)
    VALUES ('$usu', '$email', '$nomeres', '$datetime', '0')";
   
    if (mysqli_query($conexao, $sql)) {
        echo "<script>
                alert('Registro enviado');
                window.location.href='usuariologado.php';
            </script>";
    } else {
        echo "<script>
                alert('Erro ao realizar ao envio o registro!');
                window.location.href='Registros.php';
            </script>";
    }
     
?>