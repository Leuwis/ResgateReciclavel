

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo DOMINIO; ?>recursos/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title> Resgate Reciclavel </title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Resgate Reciclavel </a>
  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">

    <ul class="navbar-nav mr-auto mb-4 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>

    <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a href="<?php if(empty($_SESSION['CodUsuario'])){echo DOMINIO.'entrar';} else {echo DOMINIO.'anuncio';} ?>" class="btn btn-outline-light" href=""> <i class="bi bi-plus-circle"></i>
          Criar Anúncio</a>
      </li>
    </ul>

    <?php 
    if(empty ($_SESSION['CodUsuario'])) 
    {
      include "painelDeslogado.php";
    }
    else 
    {
      include "painelLogado.php";
    }
    ?>

    

  </div>
</nav>


  <!-- JS Bootstrap --> 
  <script src="<?php echo DOMINIO; ?>recursos/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="<?php echo DOMINIO; ?>recursos/js/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="<?php echo DOMINIO; ?>recursos/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>