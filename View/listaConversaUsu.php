<?php
include_once ('conecta.php');
 session_start();
$id_para = $_SESSION['id_para'];
$email= $_SESSION['usuario'];
$id_de= "SELECT id_usuario FROM tb_usuario where email_usuario= '{$email}'";
    $seleciona= $conexao->query($id_de);
    while($usuario = $seleciona->fetch_assoc()){ 
    $usu= $usuario["id_usuario"];
    }
   
    $id_de= $usu;
    $sql = "SELECT * FROM tb_chat WHERE (id_usuario='$id_de' && id_empresa= '$id_para') ORDER BY id_chat  LIMIT 100;";    
    $resultados=$conexao->query($sql);
   
    $conta= $resultados->num_rows;
    if($conta<=0){
        echo "<code style=color:white;> Mande uma mensagem!</code>";
    }else{
        while($row =$resultados->fetch_assoc()){

           
                 if($row['adm'] == '0'){
            echo "<div class='chat-i' > $row[mensagem] </div><br>";    
             }  if($row['adm'] == '1'){
                echo "<div class='chat-x' style=color:white> $row[mensagem]</div><br>";    
             }
        }
    }
