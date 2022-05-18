<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo DOMINIO; ?>recursos/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo DOMINIO; ?>recursos/css/estilo2.css">
    <title>Document</title>
</head>
<body>
    
<style>
@import url('https://fonts.googleapis.com/css2?family=Raleway&display=swap');
div {
    font-family: 'Raleway', sans-serif;
} p, footer {
    font-size: 13px;
}
</style>

    <div class="container">
        <div class="col-md-9 mx-auto mb-2 mt-2">
            <div class="card">
                <div class="card-header text-white text-center" style="background-color: black;">
                    Meu perfil
                </div>


                <div class="card-body">
                    <form action="<?php echo DOMINIO.'alterar-nome';?>" method="post">
                        <div class="form-group">
                            <h5> Nome completo </h5>
                            <input type="text" class="form-control form-control-sm" id="Nome" name="NovoNome" placeholder="<?php echo $_SESSION['Nome']; ?>">
                            <small id="ajudaNome" class="form-text text-muted">Para fazer a alteração do nome basta digitar o nome desejado e clicar em "Alterar nome".</small>
                            <button class="btn btn-outline-info btn-sm btn-block mt-3"> 
                                <i class="bi bi-pencil"></i> Alterar nome 
                            </button>
                        </div>
                    </form>

                    <form action="<?php echo DOMINIO.'alterar-email';?>" method="post">
                        <div class="form-group">
                            <h5> Email </h5>
                            <input type="email" class="form-control form-control-sm" id="Email" name="NovoEmail" placeholder="<?php echo $_SESSION['Email'] ?>">
                            <small id="ajudaEmail" class="form-text text-muted">Para fazer a alteração do Email basta digitar o Email desejado e clicar em "Alterar Email".</small>
                            <button class="btn btn-outline-info btn-sm btn-block mt-3"> 
                                <i class="bi bi-pencil"></i> Alterar email 
                            </button>
                        </div>
                    </form>

                    <form action="<?php echo DOMINIO.'alterar-endereco';?>" method="post">
                        <div class="row mb-2">
                            <div class="col-md-4">
                                <h5> CEP</h5>
                                <input type="text" class="form-control form-control-sm" nblur="pesquisaCep(this.value);" name="cep" maxlength="9" id="CEP" placeholder="<?php echo $_SESSION['CEP'] ?>">
                            </div>
                            <div class="col-md-3">
                                <h5> Estado </h5>
                                <input type="text" class="form-control form-control-sm" id="uf" name="estado" readonly placeholder="<?php echo $_SESSION['Estado'] ?>">
                            </div>
                            
                            <div class="col-md-5">
                                <h5> Municipio </h5>
                                <input type="text" class="form-control form-control-sm" id="cidade" name="municipio" readonly placeholder="<?php echo $_SESSION['Municipio'] ?>">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <h5> Bairro</h5>
                                <input type="text" class="form-control form-control-sm" id="bairro" name="bairro" readonly placeholder="<?php echo $_SESSION['Bairro'] ?>">
                            </div>

                            <div class="col-md-5">
                                <h5> Rua </h5>
                                <input type="text" class="form-control form-control-sm" id="rua" name="rua" readonly placeholder="<?php echo $_SESSION['Rua'] ?>">
                            </div>
                            
                            <div class="col-sm-3">
                                <h5> Numero </h5>
                                <input type="text" class="form-control form-control-sm" id="numero" name="numero" readonly placeholder="<?php echo $_SESSION['Numero'] ?>">
                            </div>

                        </div>

                        <div class="form-group mt-3">
                            <button class="btn btn-outline-info btn-sm btn-block"> 
                                <i class="bi bi-pencil"></i> Alterar o endereço completo 
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>


        <style>
        .responsive 
        {
        width: 100%;
        height: 100%;
        }
        </style>

        <div class="col-md-9 mx-auto">
            <div class="card">

                <div class="card-header text-white text-center" style="background-color: black;">
                    Meus anuncios
                </div>

                <?php
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
                                            <button class='btn btn-outline-info btn-block'> 
                                                <i class='bi bi-pencil'></i> Alterar anuncio.
                                            </button>
                                        </div>
                                    </div> 
                                     
                                    <div class='row'>
                                        <div class='col-md-7'>
                                            <h5> Endereço completo: </h5>
                                            <h6> $value->CEP </h6>
                                            <h6> $value->Estado </h6>
                                            <h6> $value->Municipio </h6>
                                            <h6> $value->Bairro </h6>
                                            <h6> $value->Rua </h6>
                                            <h6> $value->Numero </h6>

                                            <h5> Quantidade de óleo: </h5>
                                            <h6> $value->QuantidadeMaterial litros </h6>
                                            
                                            
                                            <h5> Descrição: </h5>
                                            <textarea name='descricao' style='resize: none;' class='form-control' maxlength='300' 
                                            rows='8'> $value->Descricao </textarea>
                                            
                                        </div>

                                        <div class='col-md-5'>
                                            <img
                                            class='responsive' src='".DOMINIO."recursos/img/$value->Imagem'>        
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





<script src="<?php  echo DOMINIO ?>recursos/js/viaCep.js"></script>
<script src ="<?php echo DOMINIO ?>recursos/js/Usuario.js"></script>

</body>
</html>

