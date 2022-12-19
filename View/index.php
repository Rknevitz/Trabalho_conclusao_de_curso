
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../Fotos/apple-touch-icon.png">
  <link rel="icon" href="../Fotos/android-chrome-512x512.png">
  <link rel="icon" href="../Fotos/android-chrome-192x192.png">
  <link rel="stylesheet" href="index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title>Reclicle knevitz</title>
</head>
<body >

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    


<div class='container'>
    <div class="row">
      <div class="col" style=" background: rgb(1, 28, 2);margin-top:15%;margin-left:20px;">
      <center>
      <?php
        echo "<h4 style=margin-top:20px;> Deseja visualizar as páginas</h3>";
        echo "<h4>Antes de se logar como usuário ou empresa</h3><br>";
        echo "<button style=background:green; margin-right:50px;><a style=color:white; border-radius:10px; href='../View/tela_inicial.html'><h4  style=color:white;>Entrar</h4></a></button> <br>";
    ?>
      </center>
      </div>
      <div class="col" style="background: rgb(1, 28, 2);margin-top:15%;margin-left:20px;">
      <center>
      <?php
        	echo "<h4 style=margin-top:20px;> Deseja fazer login como usuário</h3><br>";
            echo "<button  style=background:green><h4  style=color:white;><a style=color:white; href='login.html'>Login </a> </h4></button><br><br>";
            echo "<h4> Ainda não é cadastrado como usuario?</h3>";
            echo "<h4> Realize o seu cadastro agora mesmo</h4><br>";
            echo " <button  style=background:green><h4  style=color:white;><a style=color:white; href='FormularioUsuario.html'>Cadastro</h4> </a></button> <br>";
        ?>
      </center>
      </div>
  
      <div class="col"style="background: rgb(1, 28, 2);margin-top:15%;margin-left:20px;margin-right:20px;">
      <center>
      <?php
        echo "<h4 style=margin-top:20px;> Deseja fazer login como empresa</h3><br>";
        echo "<button  style=background:green><h4  style=color:white;><a style=color:white; href='login.html'>Login </a></h4></button><br> <br>";
        echo "<h4> Ainda não é cadastrado como empresa?</h3>";
        echo "<h4> Realize o seu cadastro agora mesmo</h4><br>";
        echo "<button  style=background:green><a style=color:white; href='FormularioEmpresa.html'><h4  style=color:white;>Cadastro </a> </h4></button><br> <br>";
        ?>
      </center>
      <br>
    </div>
</div>


</body>
</html>