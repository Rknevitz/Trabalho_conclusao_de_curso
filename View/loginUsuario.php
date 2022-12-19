<?php
include 'conecta.php';

if (isset($_POST['emailUsu'])) {
    $email = mysqli_real_escape_string($conexao, trim($_POST['emailUsu']));
    $senha = mysqli_real_escape_string($conexao, trim($_POST['senhaUsu']));
    $novaSenha= MD5($senha);
    $sql = "SELECT * from tb_usuario where email_usuario = '{$email}' and senha_usuario = '{$novaSenha}'";

    $retorno = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_assoc($retorno);
    
    if (mysqli_num_rows($retorno) == 1) {
     
            session_start();
            $_SESSION['usuario']= $dados['email_usuario'];
            echo "<script>
                    alert('Login realizado com sucesso!');
                    window.location.href='usuariologado.php';
                </script>";
        } else {
            echo "<script>
                    alert('Usuário não encontrado!');
                    window.location.href='Login.html';
                </script>";
    }
}
