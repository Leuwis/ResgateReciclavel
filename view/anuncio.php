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
                                    <label for="inputName5" class="form-label">Quantidade</label>
                                    <input id="rua" type="name" id="inputName5" class="form-control" placeholder="Informe a quantidade de óleo disponivel em litros" aria-describedby="nameHelpBlock" name="rua"  value="">
                            </div>
                            <div class="col-sm-12">
                                    <!-- <label for="inputName5" class="form-label">Quantidade</label>
                                    <input id="rua" type="name" id="inputName5" class="form-control" placeholder="Informe a quantidade de óleo disponivel em litros" aria-describedby="nameHelpBlock" name="rua"  value=""> -->
                                    <?php 
                                        session_start(); 

                                        if( !empty($_SESSION['CodUsuario'])){

                                             foreach($_SESSION as $key){
                                                 echo $key;
                                             }
                                            // echo $_SESSION['Cep'];
                                            // echo $_SESSION['Nome'];
                                            // echo $_SESSION['CodUsuario'];

                                            //  echo $_SESSION['Municipio'];
                                            // echo $_SESSION['Bairro'];
                                            // echo $_SESSION['Rua'];
                                            // echo $_SESSION['Numero'];
                                        }
                                         
                                        
                                        ?>
                                </div>


                             
                        </div>
                    </div>  
                    <button type="submit" class="btn btn-primary float-right" value="Entrar">Criar Anuncio</button>
                </form>  
            </div>
    </div>
    </div>



</div>
</div>
</body>
</html>

