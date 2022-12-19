<?php
include 'conecta.php';

if (isset($_POST['emailEmp'])) {
    $email = mysqli_real_escape_string($conexao, trim($_POST['emailEmp']));
    $senha = mysqli_real_escape_string($conexao, trim($_POST['senhaEmp']));
    $novaSenha= MD5($senha);
    $sql = "SELECT * from tb_empresa where email_empresa = '{$email}' and senha_empresa = '{$novaSenha}'";

    $retorno = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_assoc($retorno);
    echo mysqli_num_rows($retorno);
    if (mysqli_num_rows($retorno) == 1) {
     
            session_start();
            $_SESSION['empresa']= $dados['email_empresa'];
            echo "<script>
                    alert('Login realizado com sucesso!');
                    window.location.href='empresalogada.php';
                </script>";
        } else {
            echo "<script>
                    alert('Empresa não encontrada!');
                    window.location.href='Login.html';
                </script>";
        } 
}
