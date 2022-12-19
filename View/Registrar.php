<?php
include_once('conecta.php');

session_start();
$email= $_SESSION['empresa'];

$consulta= "SELECT id_empresa FROM tb_empresa where email_empresa= '{$email}'";
$selecionar= $conexao->query($consulta);
while($empresa = $selecionar->fetch_assoc()){ 
   $emp= $empresa["id_empresa"];
}

$consult="SELECT id_coleta, img_usuario, nm_usuario, nm_residuo, d_data FROM tb_coleta a INNER JOIN tb_usuario b ON 
a.id_usuario = b.id_usuario INNER JOIN tb_residuo c ON a.id_residuo = c.Id_residuo 
WHERE id_empresa = '$emp' AND resgistro = 0;";
$resultado= $conexao->query($consult);

?>
<!doctype html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="../Fotos/apple-touch-icon.png">
<link rel="icon" href="../Fotos/android-chrome-512x512.png">
<link rel="icon" href="../Fotos/android-chrome-192x192.png">
<link rel="icon" href="../Public/Resource/site.webmanifest">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="../View/pagina.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<title>Recicle knevitz</title>
</head>

<body style="background: rgb(3, 54, 14);">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg navbar-light">
    <!-- Brand/logo -->
<a class="navbar-brand" href="#">
  <img src="../Fotos/logo.png" alt="logo" class = " rounded-circle mx-auto d-block" style = "width: 50%">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav">
  <li class="nav-item px-md-5">
    <a class="nav-link" aria-current="page" href="tela_inicialEmpresa.html">
      <img class="mx-auto d-block" style="width: 40%">
      <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-display"
        viewBox="0 0 16 16">
        <path
          d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z" />
      </svg>
      </img>
      <h3> Sobre </h3>
    </a>
  </li>
  <li class="nav-item px-md-5">

    <a class="nav-link" aria-current="page" href="DicasEmpresa.html">
      <img class = "mx-auto d-block" style = "width: 40%">
        <svg
          xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
          class="bi bi-lightbulb" viewBox="0 0 16 16">
          <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z" />
        </svg>
      </img>
      <h3  style=" font-size: 150%;"> Dicas </h3>
    </a>

  </li>
  <li class="nav-item px-md-5">

      <a class="nav-link" aria-current="page" href="ReciclarEmprresa.html.html">
        <img class = "mx-auto d-block" style = "width: 40%"> 
          <svg
            xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
            class="bi bi-recycle" viewBox="0 0 16 16">
            <path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z" />
          </svg>
        </img>
      <h3  style=" font-size: 150%;">Reciclar</h3>
      </a>
  </li>   
  <li class="nav-item px-md-5">

  <a class="nav-link" aria-current="page" href="Adicionarendereco.php">
    <img class = "mx-auto d-block" style = "width: 40%;">
    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
      <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
    </svg>
    </img>
    <h3  style=" font-size: 150%;">endereço</h3>
  </a>      

</li>    
  <li class="nav-item px-md-5 justify-content-end">
      <a class="nav-link" aria-current="page" href="empresalogada.php">
        <img class = "mx-auto d-block" style = "width: 40%">
          <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
              class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
          </svg>
        </img>
        <h3  style=" font-size: 150%;">Logado</h3>
      </a>
  </li>    
</ul>
</div>  
</nav><br><br>
<div class="container" style="  background: rgb(6, 141, 6); border-radius: 20px;">
<br>
<div id="table" style="color:white">
        <table class="table table-striped" style="color:white">
            <tr>
            
                <td style="color:white">Registros</td>
                <td style="color:white">Cadastrados</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
               
               
               
            </tr>
            <tr>
                <td style="color:white">Imagem do usuário</td>
                <td style="color:white">Nome do usuário</td>
                <td style="color:white">Nome do resíduo</td>
                <td style="color:white">Data</td>
                <td style="color:white">Confirmar</td>
                <td style="color:white">Excluir</td>
                
            </tr>
            <?php while($dado = $resultado->fetch_assoc()){  ?>
            <tr>
           <td> <img  style="border-radius: 60%; width: 50px;" src="<?php echo "Upload/$dado[img_usuario]"?>"></td>
                <td style="color:white"><?php echo $dado["nm_usuario"];?></td>
                <td style="color:white"><?php echo $dado["nm_residuo"];?></td>
                <td style="color:white"><?php echo $dado["d_data"];?></td>
                <td><a href="UpdateColeta.php?id_coleta= <?php echo $dado["id_coleta"];?>" class='nav-item nav-link' style='color: #000000;'><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
  <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
</svg></a></td>
               
<td> <a href="Excluir.php?id_coleta= <?php echo $dado['id_coleta']?>"><svg xmlns="http://www.w3.org/2000/svg" margin-top="5px" width="40" height="40" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg></a></td>

        <?php } ?>
        </table>
        <br>
         </div> 
            </div>

</body>
</html>