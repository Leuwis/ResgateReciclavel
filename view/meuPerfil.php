<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo DOMINIO; ?>recursos/css/bootstrap.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="<?php echo DOMINIO; ?>recursos/css/estilo3.css">
    <title>Document</title>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Raleway&display=swap');
    div {
        font-family: 'Raleway', sans-serif;
    } .alert {
        width: 70%;
        height: 100%;
    }  input[type="file"] {
        display: none
    }
    label {
        font-family: 'Raleway', sans-serif;
        padding: 14px;
        font-size: 20px;
        background-color: #17a2b8;
        color: #FFF;
        border-radius: 7px;
        text-align: center;
        width: 100%;
        cursor: pointer;

    } #textoAjuda {
        text-align: center;

    } #imgAnuncioNova {
        display: block;
        margin-left: auto;
        margin-right: auto;
        padding: 3px;
        border: 3px solid black;

    } span {
        color: black;
    } 
    </style>

</head>
<body>

<?php 
    if(isset($_SESSION['alertaSucessoAlteracao'])) 
    {   
      include "alertaSucessoAlteracao.php";   
      unset($_SESSION['alertaSucessoAlteracao']);
    }
?>
    

    <div class="container">
        <div class="col-md-12 mx-auto mb-2 mt-2">
            <div class="card">
                <div class="card-header text-white text-center" style="background-color: black;">
                    Meu perfil
                </div>



                <div class="card-body">
                    <div class="form-group">

                        <button onclick="AltDadosUsuario1()"  class="btn btn-info btn-block btn-sm"> 
                            <i class="bi bi-pencil"></i> Alterar dados cadastrados
                        </button>


                        <small id="ajudaEndereco" class="form-text text-muted">
                            Para fazer a alteração dos dados basta clicar em "Alterar dados cadastrados" e preencher os campos que deseja alterar e clicar em Salvar.
                        </small>
                    </div>


                    <form action="<?php echo DOMINIO.'alterar-dados-usuario';?>" method="post">

                        <div class="form-group">
                            <h5> Nome completo </h5>
                            <input type="text" class="form-control form-control-sm" id="Nome" disabled name="Nome" placeholder="<?php echo $_SESSION['Nome']; ?>">
                        </div>

                        <div class="form-group">
                            <h5> Email </h5>
                            <input type="email" class="form-control form-control-sm" id="Email" disabled name="Email" placeholder="<?php echo $_SESSION['Email'] ?>">
                        </div>

                        <div class="form-group">
                                <small id="ajudaEndereco" class="form-text text-muted">Para fazer a alteração do endereço 
                                    basta digitar o seu CEP e o Numero desejado.
                                </small>
                            </div>

                        <div class="row mb-2">
                            <div class="col-md-4">
                                <h5> CEP</h5>
                                <input type="text" class="form-control form-control-sm" disabled onblur="pesquisaCepUsuario(this.value);" 
                                name="cepUsuario" maxlength="9" id="cepUsuario" placeholder="<?php echo $_SESSION['CEP'] ?>">
                            </div>
                            <div class="col-md-3">
                                <h5> Estado </h5>
                                <input type="text" class="form-control form-control-sm" 
                                id="estadoUsuario" name="estado" readonly placeholder="<?php echo $_SESSION['Estado'] ?>">
                            </div>
                            
                            <div class="col-md-5">
                                <h5> Municipio </h5>
                                <input type="text" class="form-control form-control-sm" 
                                id="municipioUsuario" name="municipio" readonly placeholder="<?php echo $_SESSION['Municipio'] ?>">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <h5> Bairro</h5>
                                <input type="text" class="form-control form-control-sm" 
                                id="bairroUsuario" name="bairro" readonly placeholder="<?php echo $_SESSION['Bairro'] ?>">
                            </div>

                            <div class="col-md-5">
                                <h5> Rua </h5>
                                <input type="text" class="form-control form-control-sm" 
                                id="ruaUsuario" name="rua" readonly placeholder="<?php echo $_SESSION['Rua'] ?>">
                            </div>
                            
                            <div class="col-sm-3">
                                <h5> Numero </h5>
                                <input type="text" class="form-control form-control-sm" disabled 
                                id="numeroUsuario" name="numero" placeholder="<?php echo $_SESSION['Numero'] ?>">
                            </div>

                        </div>

                        
                        <div class="row mt-3">
                            <div class="col-md-6 mb-2">
                                <button id="btnCancelar" onclick="CancelarAltDadosUsuario1()" type='reset' class="btn btn-warning btn-block btn-sm"> 
                                    <i class="bi bi-x-lg"> </i> Cancelar
                                </button>

                            </div>
                            <div class="col-md-6">
                                <button id="btnSalvar" type="submit" class="btn btn-success btn-block btn-sm"> 
                                    <i class="bi bi-check-lg"></i> Salvar
                                </button>
                            </div>
                        </div>
                        
                    </form>

                </div>
            </div>
        </div>

        <div class="col-md-12 mx-auto">
            <div class="card" id="cardzao">

                <div class="card-header text-white text-center" style="background-color: black;">
                    Meus anuncios
                </div>

                <?php

                if (empty ($dadosAnuncio)) 
                {
                    echo "<div class='alert mt-3 mx-auto text-center' role='alert'>
                    <i class='bi bi-exclamation-circle-fill'></i>


                    <strong> Você não criou nenhum anuncio. </strong>
                   </div>";
                }



                foreach ($dadosAnuncio as $value) 
                {
                    $data=date_create($value->DataCriacaoAnuncio);
                    $dataFormatada = date_format($data,"d/m/Y");
                    echo "
                    <div class='container'>
                        <div class='col-md-12  mb-2 mt-2'>
                            <div class='card'>
                                <div class='card-body'>



                                    <div class='row'>
                                        <div class='col-sm-12 mb-2'>
                                            <a href='#' class='btn btn-info btn-sm btn-block' data-toggle='modal' data-target='#AlteracaoAnuncio' 
                                            data-codanuncio='$value->CodAnuncio'
                                            data-estado='$value->Estado'
                                            data-municipio='$value->Municipio'
                                            data-bairro='$value->Bairro'
                                            data-rua='$value->Rua'
                                            data-imagem='$value->Imagem'> 
                                            <i class='bi bi-pencil'></i> Alterar anuncio</a>
                                        </div>
                                    </div> 
                                     
                                    <div class='row'>
                                        <div class='col-lg-7'>
                                            <h5> Endereço completo: </h5>
                                                <div class='row'> 
                                                    <div class='col-lg-3'>

                                                        <h6> CEP: </h6>

                                                        <input type='text'
                                                        class='form-control form-control-sm' 
                                                        id='CEPAnuncio' 
                                                        disabled 
                                                        name='cepAnuncio' 
                                                        placeholder='$value->CEP'>


                             

                                                    </div>

                                                    <div class='col-lg-3'>

                                                        <h6> Estado: </h6>

                                                        <input type='text' 
                                                        class='form-control 
                                                        form-control-sm' 
                                                        id='' name='estado' disabled placeholder='$value->Estado'>

                                                    </div>

                                                    <div class='col-lg-6'>

                                                    
                                                        <h6> Municipio: </h6>

                                                        <input type='text' 
                                                        class='form-control 
                                                        form-control-sm' 
                                                        id='' name='numero' disabled placeholder='$value->Municipio'>

                                                    </div>

                                                </div>

                                                <div class='row mt-2'> 
                                                    <div class='col-lg-5'>

                                                        <h6> Bairro: </h6>

                                                        <input type='text' 
                                                        class='form-control 
                                                        form-control-sm' 
                                                        id='' name='bairro' disabled placeholder='$value->Bairro'>

                                                    </div>

                                                    <div class='col-lg-4'>

                                                        <h6> Rua: </h6>

                                                        <input type='text' 
                                                        class='form-control 
                                                        form-control-sm' 
                                                        id='' name='rua' disabled placeholder='$value->Rua'>

                                                    </div>

                                                    <div class='col-lg-3'>

                                                    
                                                        <h6> Numero: </h6>

                                                        <input type='text' 
                                                        class='form-control 
                                                        form-control-sm' 
                                                        id='' name='numero' disabled placeholder='$value->Numero'>

                                                    </div>
                                                </div>

                                            <h5 class='mt-2'> Quantidade de óleo: </h5>

                                            <input type='number' 
                                            class='form-control 
                                            form-control-sm' 
                                            disabled
                                            id='' name='quantidadematerial'  placeholder='$value->QuantidadeMaterial'>
                                            
                                            
                                            <h5> Descrição: </h5>
                                            <textarea name='descricao' id='' style='resize: none;' class='form-control' maxlength='300' disabled 
                                            placeholder='$value->Descricao'
                                            rows='12'></textarea>

                                        </div>

                                        <div class='col-lg-4 mt-3 ml-auto'>
                                            <a href='#' class='btn btn-info btn-sm btn-block' data-toggle='modal' data-target='#mudarImagem' 
                                            data-codanuncio='$value->CodAnuncio'
                                            data-imagem='$value->Imagem'> 
                                            <i class='bi bi-pencil'></i> Alterar foto do anuncio </a>
                    
                                            <img
                                            class='img-fluid border border-5 border-dark rounded mt-1' src='".DOMINIO."recursos/img/$value->Imagem'>    

                                        </div>


                                        
                                    </div>  
                                    


                                </div>
                            </div>
                        </div>
                    </div>
                    ";
                }
                ?>


               
            </div>
        </div>


    </div>
<div class="modal fade" id="mudarImagem" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: black;">
        <h5 class="modal-title" style="color: white;">Alterar imagem do anuncio</h5>
        <button type="button" class="btn btn-info" data-dismiss="modal" aria-label="Close" id="btnFechar">
            <i class="bi bi-x-lg"> </i> Cancelar
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo DOMINIO.'alterar-imagem';?>" method='post' enctype='multipart/form-data'>

            <label for='fileUpload'> <i class='bi bi-pencil'> </i> Selecionar nova foto do anuncio</label><br>
            <h5 id="textoAjuda"> Alterar a imagem do anuncio por essa ?</h5>
            <img id='imgAnuncioNova' src='#' alt='your image' width='70%' height='70%'/>
            <input type='file' id='fileUpload' name='imagem' accept='image/*'>

             <input type='hidden'  id='codanuncio' name='codanuncio'>   
             <input type='hidden'  id='imagemAntiga' name='imagemAntiga'>                                                
                                             

            <div class="row mt-3">
                <div class="col-md-12">
                    <button type="submit" id="btnSalvarIMG" class="btn btn-success btn-block btn-sm"> 
                        <i class="bi bi-check-lg"></i> Confirmar
                    </button>
                </div>
            </div>  

        </form>  
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="AlteracaoAnuncio" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: black;">
                <h5 class="modal-title" style="color: white;">Alterar dados do anuncio</h5>
                <button type="button" class="btn" data-dismiss="modal" aria-label="Close" id="btnFechar">
                      <strong> <i class="bi bi-x-lg"> </i> Cancelar </strong>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <h6> Caso não queira alterar alguma informação, deixe em branco.</h6>
                    <form action="<?php echo DOMINIO.'alterar-anuncio'?>" method='post'>     
                        <div class='row'> 
                            <div class='col-lg-6'>   
                                <input type='text'
                                class='form-control form-control-sm' 
                                id='CodAnuncio'
                                name='CodAnuncio'>

                                <h6> CEP: </h6>

                                <input type='text'  
                                onblur="pesquisaCepAnuncio(this.value);" 
                                maxlength="9"
                                class='form-control form-control-sm' 
                                id='CEPAnuncio' 
                                name='CEPAnuncio'  
                                placeholder='Digite o novo CEP'>

                            </div>
                                

                            <div class='col-lg-6'>

                                <h6> Estado: </h6>

                                <input type='text' 
                                class='form-control 
                                form-control-sm' 
                                id='estadoAnuncio' name='estado' readonly>

                            </div>
                        </div>

                        <div class='row mt-2'> 
                            <div class='col-lg-6'>
                                                    
                                <h6> Municipio: </h6>

                                <input type='text' 
                                class='form-control 
                                form-control-sm' 
                                id='municipioAnuncio' name='municipio' readonly>

                            </div>

                            <div class='col-lg-6'>

                                <h6> Bairro: </h6>

                                <input type='text' 
                                class='form-control 
                                form-control-sm' 
                                id='bairroAnuncio' name='bairro' readonly>

                            </div>
                                                                                        
                        </div>

                        <div class='row mt-2'> 
                            <div class='col-lg-6'>

                                <h6> Rua: </h6>

                                <input type='text' 
                                class='form-control 
                                form-control-sm' 
                                id='ruaAnuncio' name='rua' readonly>

                            </div>

                            <div class='col-lg-6'>
                                <h6> Numero: </h6>

                                <input type='text' 
                                class='form-control 
                                form-control-sm' 
                                id='numeroAnuncio' name='numero' placeholder='Digite o novo numero'>

                            </div>
                        </div>   
                        
                        <div class='row mt-2'> 
                            <div class='col-lg-10 mx-auto'>
                                <h5 class='mt-2'> Quantidade de óleo: </h5>

                                <input type='number' 
                                class='form-control 
                                form-control-sm' 
                                id='quantidadematerial' name='quantidadematerial' placeholder='Digite a nova quantidade de óleo'>

                            </div>
                        </div>

                        <div class='row mt-2'> 
                            <div class='col-lg-11 mx-auto'>
                                <h5> Descrição: </h5>
                                <textarea name='descricao' id='descricao' style='resize: none;' class='form-control' maxlength='300'rows='11' 
                                placeholder='Digite a nova descrição do anuncio'></textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success btn-block btn-sm"> 
                                    <i class="bi bi-check-lg"></i> Salvar
                                </button>
                            </div>
                        </div>  
                    </form>

                </div>

                
            </div>
        </div>
    </div>
</div>




<script src="<?php echo DOMINIO; ?>recursos/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="<?php echo DOMINIO; ?>recursos/js/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="<?php echo DOMINIO; ?>recursos/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src = "<?php echo DOMINIO ?>recursos/js/viaCep4.js"></script>
<script src = "<?php echo DOMINIO ?>recursos/js/Usuario.js"></script>

<script>

    imgAnuncioNova.hidden = true;
    btnSalvarIMG.hidden = true;
    textoAjuda.hidden = true;


$('#AlteracaoAnuncio').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget) // Botão que acionou o modal
    var codanuncio = button.data('codanuncio') // Extrai informação dos atributos data-*
    var estado = button.data('estado') // Extrai informação dos atributos data-*
    var municipio = button.data('municipio') // Extrai informação dos atributos data-*
    var bairro = button.data('bairro') // Extrai informação dos atributos data-*
    var rua = button.data('rua') // Extrai informação dos atributos data-*
    var imagem = button.data('imagem') // Extrai informação dos atributos data-*

    document.getElementById("CodAnuncio").setAttribute('value', codanuncio);
    document.getElementById("estadoAnuncio").setAttribute('value', estado);
    document.getElementById("municipioAnuncio").setAttribute('value', municipio);
    document.getElementById("bairroAnuncio").setAttribute('value', bairro);
    document.getElementById("ruaAnuncio").setAttribute('value', rua);

})


$('#mudarImagem').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Botão que acionou o modal
    var codanuncio = button.data('codanuncio') // Extrai informação dos atributos data-*
    var imagem = button.data('imagem') // Extrai informação dos atributos data-*

    document.getElementById("codanuncio").setAttribute('value', codanuncio);
    document.getElementById("imagemAntiga").setAttribute('value', imagem);



})

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imgAnuncioNova').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#fileUpload").change(function(){    
    imgAnuncioNova.hidden = false;
    btnSalvarIMG.hidden = false;
    textoAjuda.hidden = false;

    readURL(this);   
});

</script>


<!--
     Swal.fire({
    title: 'Alterar a imagem do anuncio para essa imagem ?',
    html:
        '<img id="imagemAnuncio" src="#" alt="your image" width="100%" height="100%"/> <button> ',
    showDenyButton: true,
    confirmButtonText: 'Alterar imagem',
    denyButtonText: `Cancelar`,
    }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {

        
    } else if (result.isDenied) {
        Swal.fire('Alteração de imagem cancelada ', '', 'info')
    }
    })
-->

</body>
</html>