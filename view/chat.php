<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

        <div class="col-sm-8 mt-3 mx-auto">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    <h5 class="card-title">Nome da pessoa</h5>
                </div>
                <div class="card-body">
                    <form action="<?php echo DOMINIO;?>enviarMensagem" method="post" class="mensagem-enviada">

                        <div id="codigos">
                            <input type="text" class="form-control" value="<?php echo $id[0]; ?>" name="codAnuncio">
                            <input type="text" class="codAnunciante" value="<?php echo $id[1]; ?>" name="codAnunciante">
                        </div>
                        
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Digite sua mensagem..." aria-label="Recipient's username" aria-describedby="button-addon2" name="conteudo">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Enviar</button>
                            </div>
                        </div>          
                    </form>
                </div>
            </div>

    <link rel="stylesheet" href="<?php echo DOMINIO; ?>recursos/js/master.js">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script>
    
        let esconder = document.getElementById("codigos");
        esconder.hidden = true;

    </script>

</body>

</html>