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
<!--
<div class="card-deck">

<div class="card  mt-5" style="width: 100px; box-shadow: -10px 10px 11px 1px rgba(0,0,0,0.1);" >
        <div class="card-header text-black text-center" style="background-color: #9CF0B5;">
            Meu Perfil
        </div>
        <div class="card-body">
        <div class="container">
        <form>
            <div class="row">
                <div class="col">
                <label for="formGroupExampleInput">Nome</label>
                <input type="text" class="form-control" placeholder="First name">
                <label for="formGroupExampleInput" class="mt-4">Email</label>
                <input type="text" class="form-control" placeholder="First name">
                
                </div>
                <div class="col">
                </div>
            </div>
            </form>
          </div>
        </div>
    </div>




    <div class="card  mt-5" style="width: 100px; box-shadow: -10px 10px 11px 1px rgba(0,0,0,0.1);" >
        <div class="card-header text-black text-center" style="background-color: #9CF0B5;">
            Meus anuncios
        </div>
        <div class="card-body">
        <div class="container">
        <form>
            <div class="row">
                <div class="col">
                <label for="formGroupExampleInput">Nome</label>
                <input type="text" class="form-control" placeholder="First name">
                <label for="formGroupExampleInput" class="mt-4">Email</label>
                <input type="text" class="form-control" placeholder="First name">
                
                </div>
                <div class="col">
                </div>
            </div>
            </form>
          </div>
        </div>
    </div>


</div>


     
-->

<style>
@import url('https://fonts.googleapis.com/css2?family=Raleway&display=swap');
div {
    font-family: 'Raleway', sans-serif;
} p, footer {
    font-size: 13px;
}
</style>

<div class="container">
    <div class="card-deck">
        <div class="card mt-5" style="height: 400px;">
            <div class="card-block">
                <div class="card-header text-white text-center" style="background-color: black;">
                Meu Perfil
                </div>
                <div class="card-body">
                    <div class="container">

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="Nome">Nome</label>
                                <input type="text" class="form-control form-control-sm" id="Nome" placeholder="<?php echo $_SESSION['Nome'] ?>">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="Email">Email</label>
                                <input type="text" class="form-control form-control-sm" id="Email" placeholder="<?php echo $_SESSION['Email'] ?>">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="CEP">CEP</label>
                                <input type="text" class="form-control form-control-sm" id="CEP" placeholder="<?php echo $_SESSION['CEP'] ?>">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="Estado">Estado</label>
                                <input type="text" class="form-control form-control-sm" id="Estado" placeholder="<?php echo $_SESSION['Estado'] ?>">
                            </div>   

                            <div class="form-group col-md-4">
                                <label for="Municipio">Municipio</label>
                                <input type="text" class="form-control form-control-sm" id="Municipio" placeholder="<?php echo $_SESSION['Municipio'] ?>">
                            </div>   

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="Bairro">Bairro</label>
                                <input type="text" class="form-control form-control-sm" id="Bairro" placeholder="<?php echo $_SESSION['Bairro'] ?>">
                            </div>

                            <div class="form-group col-md-5">
                                <label for="Rua">Rua</label>
                                <input type="text" class="form-control form-control-sm" id="Rua" placeholder="<?php echo $_SESSION['Rua'] ?>">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="Numero">Numero</label>
                                <input type="text" class="form-control form-control-sm" id="Numero" placeholder="<?php echo $_SESSION['Numero'] ?>">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-5">
            <div class="card-block">
                <div class="card-header text-white text-center" style="background-color: black;">
                Meus anuncios
                </div>
                <div class="card-body">
                    <div class="container">
                        <?php
                        foreach ($dadosAnuncio as $value) 
                        {
                            $data=date_create($value->DataCriacaoAnuncio);
                            $dataFormatada = date_format($data,"d/m/Y");

                            echo "<div class='card mx-auto mb-3'>
                                    <div class='card-body'>
                                        <div class='container-fluid'>

                                            <div class='row'>
                                                <div class='col-md-5 mb-3'>
                                                    <p>$value->Rua $value->Bairro </p>
                                                    <p>Quantidade de óleo: $value->QuantidadeMaterial litros</p>
                                                </div
                                            </div>

                                            <div class='row'>
                                                <div class='col-md-2 mb-2 ml-auto'>
                                                    <img
                                                    width='120px' height='170px' src='recursos/img/Teste2.jpeg'>
                                                </div>
                                            </div>

                                            <div class='row'>
                                                <div class='col-md-12'>
                                                    <blockquote class='blockquote mb-0'>
                                                        <footer style='font-size: 12px' class='blockquote-footer'>Anuncio criado em: $dataFormatada</footer>
                                                    </blockquote>
                                                </div>
                                            </div>

                                            <div class='col-md-2 ml-auto'>
                                                <a href='#' class='btn btn-dark btn-sm' data-toggle='modal' data-target='#Anuncio'> Editar </a>
                                            </div>
                                            
                                        </div>
                                       </div>
                                    </div>
                                   </div>";

                        }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


 

</body>
</html>

