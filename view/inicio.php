<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo DOMINIO; ?>recursos/css/estilo3.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <link rel="stylesheet" href="<?php echo DOMINIO; ?>recursos/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <title> Resgate Reciclavel </title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #9CF0B5;">
    <img src="<?php echo DOMINIO; ?>recursos/img/Teste1.png" width="175px" height="75px">
    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">

      <ul class="navbar-nav mr-auto mb-4 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
      </ul>


      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="<?php echo DOMINIO . 'anuncio'; ?>" class="btn btn-dark">
            <i class="bi bi-plus-circle"></i>
            Criar anúncio de doação de óleo</a>
        </li>
      </ul>



      <?php
      if (empty($_SESSION['CodUsuario'])) {
        include "painelDeslogado.php";
      } else {
        include "painelLogado.php";
      }
      ?>



    </div>
  </nav>

  <?php
  if (isset($_SESSION['alertaLogar'])) {
    include "alertaLogar.php";
    unset($_SESSION['alertaLogar']);
  }
  ?>

  <br>



  <?php
  if (empty($dadosAnuncio)) {

    echo "<div class='alert mt-3 mx-auto text-center' role='alert'>
    <i class='bi bi-exclamation-circle'></i>
    <strong> Você não criou nenhum anuncio. </strong>
    </div>";
  }

  echo "
<style>
@import url('https://fonts.googleapis.com/css2?family=Raleway&display=swap');
p, h5, h6, a, footer {
font-family: 'Raleway', sans-serif;
} h4 {
  font-family: 'Raleway', sans-serif;
}
</style>";



  foreach ($dadosAnuncio as $value) {
    $data = date_create($value->DataCriacaoAnuncio);
    $dataFormatada = date_format($data, "d/m/Y");
    echo "
                    <div class='container mx-auto'>
                      <div class='row'>
                        <div class='col-sm-8 mx-auto mb-2 mt-2'>
                          <div class='card' style='box-shadow: -10px 1px 11px 1px rgba(0,0,0,0.1);'>
                            <div class='row card-body'>
                              <div class='col-lg-6'>
                              <h5 class='card-title'>Anunciante: </h5>
                                <p class='card-text'>$value->Nome</p>
                                <h5 class='card-title'>Endereço: </h5>
                                <p class='card-text'>$value->CEP</p>
                                <p class='card-text'>$value->Estado</p>
                                <p class='card-text'>$value->Municipio</p>
                                <p class='card-text'>$value->Bairro</p>
                                <h5 class='card-title'>Quantidade de óleo: </h5>
                                <p class='card-text'> $value->QuantidadeMaterial litros</p>
                                <h5 class='card-title'>Descrição do anuncio: </h5>
                                <p class='card-text'>$value->Descricao</p>
                                <a href='" . DOMINIO . "abrirChat/$value->CodAnuncio$value->CodUsuario' class='btn btn-dark'> 
                                <i class=bi bi-chat'></i> Conversar com o anúnciante 
                                </a>
                              </div>
                              <div class='col-lg-6'>
                              <img
                                <img class='img-fluid' style='border: 2px solid black;' src='" . DOMINIO . "recursos/img/$value->Imagem'>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    ";
  }

  ?>


  <!-- JS Bootstrap -->
  <script src="<?php echo DOMINIO; ?>recursos/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="<?php echo DOMINIO; ?>recursos/js/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="<?php echo DOMINIO; ?>recursos/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>