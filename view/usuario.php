<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS Bootstrap -->
     <link rel="stylesheet" href="<?php echo DOMINIO; ?>recursos/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title> Registrar </title>
</head>
<body>

    <div class="card mx-auto mt-5" style="width: 45rem; box-shadow: -10px 10px 11px 1px rgba(0,0,0,0.1);">
        <div class="card-header text-white bg-primary text-center">
                Registrar 
        </div>
        <div class="card-body">
            <form action="<?php echo DOMINIO; ?>cadastrarUsuario" method="post">
               
                 <div class="mb-3">
                    <div class="row ">
                        <div class="col-sm-6">
                            <label for="exampleInputName1" class="form-label">Nome</label>
                            <input id="nome" type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Digite seu nome..." name="nome" required>
                        </div>
                        
                        <div class="col-sm-6">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input id="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o seu email..." name="email" required>
                        </div>

                         <div class="col-sm-6">
                            <label for="exampleInputPassword1" class="form-label">Senha</label>
                            <input id="senha" type="password" class="form-control" maxlength="12" minlength="6" id="exampleInputPassword1" placeholder="Digite sua senha..." name="senha" maxlength="15" required>
                        </div>

                        <div class="col-sm-6 align-self-end">
                            <button type="button" class="btn btn-secondary mt-4" onclick="adicionarEnd()">Adicionar endereço</button>
                        </div>
                        
                        <!-- <div class="col-sm-7 mt-3 " style="background-color: #48D1CC; padding:-10px;">
                            <p>Informar o endereço é opcional</p>
                        </div> -->
                       
                    </div>
                    <div id="endereco" class="row mt-3">
                        <div class="col-sm-6">
                            <label for="inputName5" class="form-label">CEP</label>

                            <div class="input-group mb-3">
                                <input id="cep" type="text" class="form-control" onblur="pesquisaCep(this.value);" id="inputName5" maxlength="9" value="" name="cep" placeholder="Digite seu cep...">
                            </div>
                        </div>
                    
                            <div class="col-sm-6">
                                    <label for="inputName5" class="form-label">Estado</label>
                                    <input id="uf" type="name" id="inputName5" maxlength="2" class="form-control" aria-describedby="nameHelpBlock" name="estado"  value="" readonly>
                                </div>
                                <div class="col-sm-6">
                                    <label for="inputName5" class="form-label">Município</label>
                                    <input id="cidade" type="name" id="inputName5" class="form-control" aria-describedby="nameHelpBlock" name="municipio" value="" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label for="inputName5" class="form-label">Bairro</label>
                                    <input id="bairro" type="name" id="inputName5" class="form-control" aria-describedby="nameHelpBlock" name="bairro" value="" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label for="inputName5" class="form-label">Rua</label>
                                    <input id="rua" type="name" id="inputName5" class="form-control" aria-describedby="nameHelpBlock" name="rua"  value="" readonly>
                                </div>
                                <div class="col-sm-6">
                                    <label for="inputName5" class="form-label">Número</label>
                                    <input id="numero" type="name" id="inputName5" class="form-control" aria-describedby="nameHelpBlock" placeholder="Digite o número da sua residência..." name="numero">
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-sm-3 align-self-end mt-3">
                                        <input type="submit" class="btn btn-success btn-block" value="Cadastrar"></input>
                                    </div>
                                    <div class="col-sm-3 align-self-end">
                                        <input type="button" onclick="limpa()" class="btn btn-secondary btn-block" value="Limpar formulario"></input>
                                    </div>
                            </div>  
                        </div>
                            
                    </div>
                        
            </form>  
        </div>
    </div>

    <script src="<?php  echo DOMINIO ?>recursos/js/viaCep.js"></script>
    <script src ="<?php echo DOMINIO ?>recursos/js/Usuario.js"></script>

    <!-- JS Bootstrap --> 
<script src="<?php echo DOMINIO; ?>recursos/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="<?php echo DOMINIO; ?>recursos/js/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="<?php echo DOMINIO; ?>recursos/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>

