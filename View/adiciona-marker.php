<?php
$conn = new mysqli("localhost", "root","","db_tcc");
if (!$conn) {
    echo("Connection failed: " . mysqli_connect_error());
}else{
    session_start();
    $email= $_SESSION['empresa'];

    $consulta= "SELECT id_empresa FROM tb_empresa where email_empresa= '{$email}'";
    $seleciona= $conn->query($consulta);
    while($empresa = $seleciona->fetch_assoc()){ 
    $emp= $empresa["id_empresa"];
    }
    $dados = json_decode(file_get_contents("php://input")); // Assim você lê e faz o decode

    $sql = "INSERT INTO tb_adiciona_endereco(nome, lat, lng, id_empresa) VALUES('$dados->nome','$dados->lat','$dados->lng', '{$emp}')";

    if (mysqli_query($conn, $sql)) {
        echo "Dados inseridos com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
