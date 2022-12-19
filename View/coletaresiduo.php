<?php
include('conecta.php');
$residuo = mysqli_real_escape_string($conexao, trim($_POST['residuoEmp']));
session_start();
$email=$_SESSION['empresa'];
$consulta = "SELECT id_empresa from tb_empresa where email_empresa = '{$email}'";

$sql = "INSERT INTO tb_empresa_residuo (id_empresa,id_residuo)
VALUES ($consulta,'$residuo')";

?>