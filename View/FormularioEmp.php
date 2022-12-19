
<?php
include 'conecta.php';
if (isset($_POST['nomeEmp'])) {
    $nome = mysqli_real_escape_string($conexao, trim($_POST['nomeEmp']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['emailEmp']));
    $senha = mysqli_real_escape_string($conexao, trim($_POST['senhaEmp']));
    $senhaMD5= MD5($senha);
    $cel =  mysqli_real_escape_string($conexao, trim($_POST['celEmp']));
    $extensao = strtolower(substr($_FILES['fotoemp']['name'],-4));
    $novo_nome= md5(time()) . $extensao;
    $diretorio= "upload/";
    move_uploaded_file($_FILES['fotoEmp']['tmp_name'], $diretorio.$novo_nome);
    $sql = "SELECT senha_empresa from tb_empresa where email_empresa = '{$email}'";
    
    $retorno = mysqli_query($conexao, $sql);
    if (mysqli_num_rows($retorno) > 0) {
        echo "<script>
                alert('Já existe o email cadastrado!');
                window.location.href='cadastro.html';
            </script>";
    }
    // consulta sql para inserir um novo valor com a senha criptografada
    $senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);
    $sql = "INSERT INTO tb_empresa (nm_empresa, email_empresa, senha_empresa, celular_empresa, img_empresa)
VALUES ('$nome', '$email',  '$senhaMD5', '$cel','$novo_nome')";


    if (mysqli_query($conexao, $sql)) {
        echo "<script>
                alert('Novo cadastro realizado com sucesso!');
                window.location.href='login.html';
            </script>";
    } else {
        echo "<script>
                alert('Erro ao realizar o cadastro!');
                window.location.href='FormularioEmpresa.html';
            </script>";
    }
}
