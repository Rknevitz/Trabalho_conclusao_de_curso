<?php include_once("conecta.php");
$id_coleta=$_GET['id_coleta'];
$deletar = "DELETE FROM tb_coleta WHERE id_coleta='$id_coleta'";
$resultado = mysqli_query($conexao, $deletar);
header("location: empresalogada.php");
?>
