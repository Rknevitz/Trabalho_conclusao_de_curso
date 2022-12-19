
<?php
include 'conecta.php';
if (isset($_POST['nomeUsu'])) {
    $nome = mysqli_real_escape_string($conexao, trim($_POST['nomeUsu']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['emailUsu']));
    $senha = mysqli_real_escape_string($conexao, trim($_POST['senhaUsu']));
    $senhaMd5 = MD5($senha);
    $cel =  mysqli_real_escape_string($conexao, trim($_POST['celUsu']));
    $extensao = strtolower(substr($_FILES['fotoUsu']['name'],-4));
    $novo_nome= md5(time()) . $extensao;
    $diretorio= "Upload/";
    move_uploaded_file($_FILES['fotoUsu']['tmp_name'], $diretorio.$novo_nome);
    $sql = "SELECT senha_usuario from tb_usuario where email_usuario = '{$email}'";
    
    $retorno = mysqli_query($conexao, $sql);
    if (mysqli_num_rows($retorno) > 0) {
        echo "<script>
                alert('Já existe o email cadastrado!');
                window.location.href='FormularioUsu.html';
            </script>";
    }
    // consulta sql para inserir um novo valor com a senha criptografada
 
    $sql = "INSERT INTO tb_usuario (nm_usuario, email_usuario, senha_usuario, celular_usuario, img_usuario)
VALUES ('$nome', '$email', '$senhaMd5', '$cel','$novo_nome')";


    if (mysqli_query($conexao, $sql)) {
        echo "<script>
                alert('Novo cadastro realizado com sucesso!');
                window.location.href='login.html';
            </script>";
    } else {
        echo "<script>
                alert('Erro ao realizar o cadastro!');
                window.location.href='FormularioUsuario.html';
            </script>";
    }
}
