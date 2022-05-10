
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo DOMINIO; ?>recursos/css/estilo2.css">
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
        <a href="<?php echo DOMINIO.'anuncio';?>" class="btn btn-dark"> 
        <i class="bi bi-plus-circle"></i>
          Criar anúncio de doação de óleo</a>
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

<?php 
    if(isset($_SESSION['alertaLogar'])) 
    {   
      include "alertaLogar.php";   
      unset($_SESSION['alertaLogar']);
    }
?>

<br> 

<?php  
foreach ($dadosAnuncio as $value)
{
  $data=date_create($value->DataCriacaoAnuncio);
  $dataFormatada = date_format($data,"d/m/Y");
  $tooltipNome = "data-toggle='tooltip' data-placement='left' title='Nome do anunciante.'";
  $tooltipRuaeBairro = "data-toggle='tooltip' data-placement='left' title='Rua e Bairro para coleta'";
  $tooltipFoto = "data-toggle='tooltip' data-placement='right' title='Foto de onde esta armazenado o óleo do anunciante.'";
  
  

  echo "

  <style>
  @import url('https://fonts.googleapis.com/css2?family=Raleway&display=swap');
  p, h5, h6, a, footer {
  font-family: 'Raleway', sans-serif;
  } 
</style>
      <div class='card mx-auto mb-3' style='width: 47rem;'>
      <div class='card-body'>
        <div class='container-fluid'>
          <div class='row'>
            <div class='col-md-5 mb-3'>
              <p class='card-text' $tooltipRuaeBairro id='Primeiro'>$value->Rua $value->Bairro </p>
              <p class='card-text'>Quantidade de óleo: $value->QuantidadeMaterial litros</p>
            </div
          </div>

          <div class='row'>
            <div class='col-md-2 mb-2 ml-auto'>
              <img $tooltipFoto id='Segundo'
              width='210px' height='250px' src='recursos/img/Teste2.jpeg'>
            </div>
          </div>

          <div class='row'>
            <div class='col-md-12'>
              <blockquote class='blockquote mb-0'>
              <footer style='font-size: 15px' class='blockquote-footer'>Anuncio criado em: $dataFormatada</footer>
              </blockquote>
            </div>
          </div>

            <div class='col-md-3 ml-auto'>
              <a href='#' class='btn btn-dark' data-toggle='modal' data-target='#Anuncio' 
              data-donoanuncio='$value->DonoAnuncio'
              data-quantidadematerial='$value->QuantidadeMaterial'
              data-bairro='$value->Bairro'
              data-rua='$value->Rua'
              data-cep='$value->CEP'
              data-numero='$value->Numero'
              data-descricao='$value->Descricao'
              data-municipio='$value->Municipio'
              data-descricao='$value->Descricao'>Vizualizar anuncio</a>
            </div>
          </div>

    
        </div>
      </div>  
    </div>
    
";
}


?>


<!-- Modal -->
<div class="modal fade" id="Anuncio" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 id="DonoAnuncio"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
          <div class="col-md-2">
            <h6> Endereço: </h6>
            </div>
            <div class="col-md-5">
            <h6 id="Municipio"></h6>
            <h6 id="CEP"></h6>
            <h6 id="Endereço"></h6>
            </div>
            <div class="col-md-5 ml-auto">
              <a href="#" class="btn btn-dark"> 
              <i class="bi bi-chat"></i> Conversar com o anúnciante 
              </a> 
              <br><br>

              <h5 id="QuantidadeMaterial"></h5>
            </div>
          </div>

          <div class="row">
            
          <div class="col-md-7" style="border:1px solid black;">
              <h5 id="Descricao"></h5>
            </div>
            <div class="col-md-5 ml-auto">
              <img
                    width='300px' height='400px' 
                    src="<?php echo DOMINIO; ?>recursos/img/Teste2.jpeg">
            </div>
          </div>


          



           

          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




  <!-- JS Bootstrap --> 
  <script src="<?php echo DOMINIO; ?>recursos/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="<?php echo DOMINIO; ?>recursos/js/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="<?php echo DOMINIO; ?>recursos/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<script>

  $(function () {
    $('#Primeiro').tooltip('show')
    $('#Segundo').tooltip('show')
  })


  $('#Anuncio').on('show.bs.modal', function (event) {
  $('[data-toggle="tooltip"]').tooltip('hide')
  var button = $(event.relatedTarget) // Botão que acionou o modal
  var donoanuncio = button.data('donoanuncio') // Extrai informação dos atributos data-*
  var rua = button.data('rua') // Extrai informação dos atributos data-*
  var numero = button.data('numero') // Extrai informação dos atributos data-*
  var municipio = button.data('municipio') // Extrai informação dos atributos data-*
  var quantidadematerial = button.data('quantidadematerial')
  var Textoquantidadematerial = quantidadematerial + " litros de óleo" // Extrai informação dos atributos data-*
  var bairro = button.data('bairro') // Extrai informação dos atributos data-*
  var cep = button.data('cep') // Extrai informação dos atributos data-*
  var descricao = button.data('descricao') // Extrai informação dos atributos data-*

  // Atualiza o conteúdo do modal. Nós vamos usar jQuery, aqui. No entanto, você poderia usar uma biblioteca de data binding ou outros métodos.
  $("#DonoAnuncio").text(donoanuncio)
  $("#QuantidadeMaterial").text(Textoquantidadematerial)
  $("#Endereço").text(bairro + "  " + rua + "  " + numero)
  $("#Descricao").text(descricao)
  $("#CEP").text(cep)
  $("#Municipio").text(municipio)
  $("#Descricao").text(descricao)


})
</script>
</body>
</html>