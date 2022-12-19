<?php
include_once('conecta.php');
$dados = json_decode(file_get_contents("php://input")); 

$consult="SELECT nome, lat, lng, email_empresa FROM tb_adiciona_endereco a INNER JOIN tb_empresa b ON 
a.id_empresa = b.id_empresa INNER JOIN tb_empresa_residuo c ON b.id_empresa = c.id_empresa 
INNER JOIN tb_residuo d ON c.id_residuo = d.Id_residuo
WHERE  c.id_residuo = '$dados->residuo'";
   
    $result = mysqli_query($conexao, $consult);
    $retorno = '';
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $dado = implode(",", $row);
            if (strcmp($retorno, '')== 0 )
                $retorno = $retorno . $dado;
            else
                $retorno = $retorno . ',' . $dado;
        }
        echo $retorno;
    } else {
        echo "Não foram encontrados dados com esse nome";
    }

?>