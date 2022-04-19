<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/bootstrap.css">
    <link rel="stylesheet" href="../estilo/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo DOMINIO; ?>recursos/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title> Criação de anúncio </title>
</head>
<body>
    <div class="card mx-auto mt-5" style="width: 30rem; box-shadow: -10px 10px 11px 1px rgba(0,0,0,0.1);" >
        <div class="card-header text-white bg-primary text-center">
                Criar anúncio 
        </div>
        <div class="card-body">
            <div class="container">
                <div class="box">
                    <form action="<?php echo DOMINIO. 'logar';?>" method="post">
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-sm-12">
                                        <label for="inputName5" class="form-label">Quantidade:</label>
                                        <input id="" type="number" id="inputName5" class="form-control" placeholder="Informe a quantidade de óleo disponivel em litros" aria-describedby="nameHelpBlock" name=""  value="">
                                </div>
                                <div class="col-sm-12">

                                
                                                <label for="inputName5" class="form-label">Endereço:</label>
                                        
                
                                            <?php 


                                                session_start();

                                                if( !empty($_SESSION['CodUsuario'])){
                                                    $cep = $_SESSION['CEP'];
                                                    $rua = $_SESSION['Rua'];
                                                    $num = $_SESSION['Numero'];

                                                    echo "<div class='col-sm-12 align-self-end '>
                                                        <div class='alert alert-info' role='alert'>Cep $cep, Rua $rua, Nº $num
                                                            <div class='row'>

                                                                <button type='button' class='btn btn-secondary btn-block'>Usar este endereço</button>

                                                            </div>
                                                        </div>
                                                    </div>";

                                                }
                                                echo " <button type='button' class='btn btn-dark btn-block' onclick='adicionarEnd()'>Usar outro endereço</button>
                                                ";
                                                include "view/endereco.php";
                                                
                                                ?>
                                            </div>


                                        
                                            
                        <button type="submit" class="btn btn-primary float-right">Criar Anuncio</button>
                        
                    </form>  
                    <script src="<?php  echo DOMINIO ?>recursos/js/viaCep.js"></script>
                    <script src ="<?php echo DOMINIO ?>recursos/js/Usuario.js"></script>

                    <script></script>

                        

                            

                               
                </div>
            </div>
        </div>

        </div>
    </div>
</body>
</html>

