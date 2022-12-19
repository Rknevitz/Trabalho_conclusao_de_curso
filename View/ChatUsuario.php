<?php	
include_once('conecta.php');
session_start();
$_SESSION['id_para'] = $_GET['empresa'];

$email= $_SESSION['usuario'];
$id_de= "SELECT id_usuario FROM tb_usuario where email_usuario= '{$email}'";
    $seleciona= $conexao->query($id_de);
    while($usuario = $seleciona->fetch_assoc()){ 
    $Usu= $usuario["id_usuario"];
    }

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
  <link rel="stylesheet" href="pagina.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <title>Recicle knevitz</title>
  <script type="text/javascript" src="js/scriptusu.js"> </script>
</head>
  
<body style="background: rgb(3, 54, 14);">
    
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
        <a class="nav-link" aria-current="page" href="tela_inicialUsuario.html">
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

        <a class="nav-link" aria-current="page" href="DicasUsuario.html">
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

          <a class="nav-link" aria-current="page" href="ReciclarUsuario.html">
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
          <a class="nav-link" aria-current="page" href="Descartar.html">
            <img class = "mx-auto d-block" style = "width: 40%">
              <svg
                xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
              </svg>
            </img>
            <h3  style=" font-size: 150%;">Descartar</h3>
          </a>      
      </li>    
      <li class="nav-item px-md-5 justify-content-end">
          <a class="nav-link" aria-current="page" href="usuariologado.php">
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
   <br> 
   
<div class="container" style="background: linear-gradient(to left,rgb(6, 141, 6), grey 60%); border:1px;  border-radius: 8px;  ">
<br>

	<div id="lista">
    
	</div>
	<hr/>
	<form id="form-chat" action="" method="POST" enctype="multipart/form-data">
		<div class="col-lg-12">
			<div class="input-group">
				<input type="text" name="mensagem" id="mensagem" placeholder="Digite sua mensagem" class="form-control" />
				<span class="input-group-btn">
					<input type="submit" value="&rang;&rang;" class="btn btn-success">
					<input type="hidden" name="env" value="envMsg"/>
				</span>
			</div>
	</form>

	<?php
		if(isset($_POST['env']) && $_POST['env'] == "envMsg"){
			$mensagem = $_POST['mensagem'];
		  $id_para= $_GET['empresa'];
			$id_de = $Usu;

      $sql="INSERT INTO tb_chat (id_usuario, id_empresa, mensagem, adm) VALUES ('$id_de', '$id_para', '$mensagem', '0')";
      
    if (mysqli_query($conexao, $sql)) {
      echo "<h3 style= margin-top:5px;margin-left:40%;>Mensagem enviada</h3>";
  } else {
      echo "Erro: " ;
  }
  mysqli_close($conexao);
}		
	?>
	<br></br>
</div>
</div>
<script>
    $(document).ready(function(){
	comeca();
})

	var timerI = null;
	var timerR = false;

	function para(){
		if(timerR)
			clearTimeout(timerI);
			timerR = false;
	}

	function comeca(){
		para();
		lista();
	}

	function lista(){
		$.ajax({
			url:"listaConversaUsu.php",
			success: function(textStatus){
				$("#lista").html(textStatus); //Mostra o resultado da página lista.php
			}
		})
		timerI = setTimeout("lista()", 3000); //Tempo de espera para atualizar novamente
		timerR = true;
	}
  </script>
  </body>
</html>