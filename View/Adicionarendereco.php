<?php
include_once('conecta.php');

$consultar= "SELECT * FROM tb_residuo";

$resultados= $conexao->query($consultar);

?>


<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <title>Adicionando um marcador no endereço selecionado</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
  <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
  <link rel="stylesheet" href="../View/template.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
  <link rel="icon" href="../Fotos/apple-touch-icon.png">
  <link rel="icon" href="../Fotos/android-chrome-512x512.png">
  <link rel="icon" href="../Fotos/android-chrome-192x192.png">
  <link rel="icon" href="../Public/Resource/site.webmanifest">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
  <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
  <title>Recicle knevitz</title>
</head>

<body style="background: rgb(3, 54, 14);" >
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

      <a class="nav-link" aria-current="page" href="ReciclarEmpresa.html">
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
        <h3  style=" font-size: 150%;">Endereço</h3>
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
</nav>
  <div class="container" style="margin-top: 50px">
    <h2>Cadastro de Local</h2>
    <form action="residuoEmp.php" method="POST">
      <div class="form-group">
        <br>
        <input style="  border-radius: 10px;" type="text" class="form-control" id="nome" placeholder="Digite o nome da empresa" name="nome">
      </div>

      <select style="width: 100%;height: 40px;  background: rgb(3, 54, 14); color:white; font-size:100%; border-radius: 10px;" class="form-select formselect mb-3" name="residuoEmp">
      <option> Escolha o resíduo que irá fazer a coleta </option>
      <?php while($residuos = $resultados->fetch_assoc()){  ?>
        <option value="<?php echo $residuos["Id_residuo"];?>"><?php echo $residuos["nm_residuo"];?></option>
        <?php
        }
        ?>
     
      </select>
      <div class="form-group">
        <input style="height: 40px; " type="hidden" placeholder="Digite a latitude" id="lat" name="lat" type="number" pattern="[0-9]+([,\.][0-9]+)?" step="any">
      </div>
    
      <div class="form-group">
        <input style="height: 40px; "type="hidden" placeholder="Digite a longitude" id="lng"  type="number" name="lng" pattern="[0-9]+([,\.][0-9]+)?" step="any">
      </div>
      <input   type="submit" value="cadastrar" class="btn btn-primary" onclick="cadastra();">
    </form>
 
  <br><br>
  <center>
    <div id="mural"></div>

    <div id="map"></div>
 
  <script type="text/javascript" src='adiciona-marker.js'></script>
  
  <br>
</center>
</div>
</body>

</html>