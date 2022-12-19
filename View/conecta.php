<?php
$conexao = mysqli_connect("localhost", "root", "", "db_tcc");

// Verifica se conseguiu a conexao
if (!$conexao) {
  
    die("Falha na conexão com o banco: " . mysqli_connect_error());
   
}

?>