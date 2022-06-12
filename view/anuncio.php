<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <form action="<?php echo DOMINIO. 'criarAnuncio';?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-sm-12 mb-2">
                                <label for="inputName5" class="form-label">Quantidade:</label>
                                <input id="" type="number" id="inputName5" class="form-control" placeholder="Informe a quantidade de óleo disponivel em litros" aria-describedby="nameHelpBlock" name="quantidade"  value="">
                            </div>

                                <!-- <div class="col-sm-12">
                                        <label for="inputName5" class="form-label">Data disponivel para coléta</label>
                                        <input id="" type="date" id="inputName5" class="form-control" placeholder="Informe a quantidade de óleo disponivel em litros" aria-describedby="nameHelpBlock" name=""  value="data">
                                </div> -->
                                <!-- <div class="col-sm-12">
                                        <label for="inputName5" class="form-label">Data disponivel para coléta</label>
                                        <input id="" type="text" id="inputName5" class="form-control" placeholder="Informe a quantidade de óleo disponivel em litros" aria-describedby="nameHelpBlock" name="data"  value="">
                                </div> -->
                                <!-- <div class="col-sm-12">
                                        <label for="inputName5" class="form-label">Hora disponivel para coléta</label>
                                        <input id="" type="time" id="inputName5" class="form-control" placeholder="Informe a quantidade de óleo disponivel em litros" aria-describedby="nameHelpBlock" name="hora"  value="" > 
                                </div> -->
                            <div class="col-sm-12 mb-2">
                            <label for="inputName5" class="form-label">Endereço:</label>
                            <?php 
                            $escolherEnd = "Informar endereço";
                             //$desabilita = "disabled";

                            if( !empty($_SESSION['CEP'])){
                                $cep = $_SESSION['CEP'];
                                $rua = $_SESSION['Rua'];
                                $num = $_SESSION['Numero'];
                                                    
                                $escolherEnd = "Usar outro endereço";

                                echo "<div class='col-sm-12 align-self-end '>
                                      <div class='alert alert-info' role='alert'>Cep $cep, Rua $rua, Nº $num
                                      <div class='row'>
                                      <button type='button' class='btn btn-secondary btn-block' onclick='limpa()'>Usar este endereço</button>
                                     </div>
                                     </div>
                                     </div>";

                            }
                                echo " <button type='button' class='btn btn-dark btn-block' onclick='esteEnd()' >$escolherEnd</button>";
                                include "view/endereco.php";
                                                
                            ?>
                            </div>

                            <div class="col-sm-12 mb-2">
                                <label for="exampleFormControlTextarea1">Informações extras: </label>
                                <textarea name="descricao"style="resize: none;" class="form-control" maxlength="400" 
                                placeholder="Acresente alguma informação que deseja que o coletor saiba sobre seu anuncio.
Exemplo: Se sua rua é estreita e pessoas com carro podem ter dificuldade, se sua casa não é tão facil de ser achada e etc."
                                id="exampleFormControlTextarea1" rows="5"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Imagem</label>
                                <input type="file" name="imagem" accept="image/*" class="form-control">
                            </div>
                                     
                        <button type="submit" class="btn btn-primary float-right">Criar Anuncio</button>
                        <!-- <button type="submit" class="btn btn-primary float-right" <?php echo $desabilita;?>>Criar Anuncio</button> -->
                        
                    </form>  
                    <script src="<?php  echo DOMINIO ?>recursos/js/viaCep4.js"></script>
                    <script src ="<?php echo DOMINIO ?>recursos/js/Usuario.js"></script>
                   
                    <script>
                        function limpa(){
    
                       
                        document.getElementById("cep").value = "";
                        document.getElementById("uf").value = "";
                        document.getElementById("cidade").value = "";
                        document.getElementById("bairro").value = "";
                        document.getElementById("rua").value = "";
                        document.getElementById("numero").value = "";
                        end.hidden = true;
                    }   
                    function esteEnd(){
                        end.hidden = false;
                        alert($_SESSION['CodUsuario']);
                    }
                    </script>
                        

                            
                                                
                </div>
            </div>
        </div>

        </div>
    </div>
</body>
</html>

