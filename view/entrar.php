<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/bootstrap.css">
    <link rel="stylesheet" href="../estilo/estilo2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo DOMINIO; ?>recursos/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title> Entrar </title>
</head>
<body>
<?php
if(isset($_SESSION['ErroLogar'])) 
{   
    include "ErroLogar.php";   
    unset($_SESSION['ErroLogar']);
}
?>

<div class="card mx-auto mt-5" style="width: 450px; box-shadow: -10px 10px 11px 1px rgba(0,0,0,0.1);" >
    <div class="card-header text-black text-center" style="background-color: #9CF0B5;">
            Entrar
    </div>
        <div class="card-body">
        <div class="container">
            <div class="box">
                <form action="<?php echo DOMINIO. 'logar';?>" method="post">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Digite o seu email." name="email">
                            </div>
                            <div class="col-sm-12">
                                <br>
                                <label for="exampleInputPassword1" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha." name="senha" maxlength="15">
                            </div> 
                        </div>
                    </div>  
                    <button type="submit" class="btn float-right" style="background-color: #9CF0B5;" value="Entrar">Entrar</button>
                </form>  
            </div>
    </div>
    </div>



</div>
</div>
</body>
</html>

