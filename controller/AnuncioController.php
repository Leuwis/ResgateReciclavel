<?php
    include "model/Anuncio.php";

    class AnuncioController{

        //cadastrar anuncio no bd
        function criarAnuncio(){
            if(empty($_POST['quantidade'])){
                echo "<script>
                alert('Informe a quantidade!');
                window.location=' ".DOMINIO."anuncio';
                </script>";
            }
            if(empty($_SESSION['CEP']) && empty($_POST['cep']) && empty($_POST['numero'])){
                echo "<script>
                alert('Informe um endereÃ§o!');
                window.location=' ".DOMINIO."anuncio';
                </script>";
            }

            $data = date('Y-m-d');

        
            //instanciando classe anuncio
            $anuncio = new Anuncio();
            

            //atribuindo valores para os atributos pelo mÃĐtodo set
            $nomeArquivo        = $_FILES["imagem"]["name"];
            $nomeTemp           = $_FILES["imagem"]["tmp_name"];
            $anuncio->statusanuncio = true;
            $anuncio->codusuario = $_SESSION['CodUsuario'];

            // pegar a extensão do arquivo
            $info     = new SplFileInfo($nomeArquivo);
            $extensao = $info->getExtension();
            $novoNome = md5(microtime()) . ".$extensao"; 
    
            $pastaDestino       = "recursos/img/$novoNome";
    
            move_uploaded_file($nomeTemp, $pastaDestino);
    
            $anuncio->imagem = $novoNome;

            $anuncio->datacriacaoanuncio = $data;
            $anuncio->quantidadematerial = $_POST['quantidade'];
            $anuncio->descricao = $_POST['descricao'];

            if(isset($_POST["cep"]) && isset($_POST["numero"])){

                $anuncio->cep = $_POST["cep"];
                $anuncio->estado = $_POST["estado"];
                $anuncio->municipio = $_POST["municipio"];
                $anuncio->bairro = $_POST["bairro"];
                $anuncio->rua = $_POST["rua"];
                $anuncio->numero = $_POST["numero"];
             }

             $anuncio->cadastrar();

            //  echo "<div> Salvos </div>";
             echo "<script> alert('dados cadastrados com sucesso');
             window.location='".DOMINIO."inicio'</script>";
             
        }

        function alterarAnuncio(){

            $anuncio = new Anuncio();


            if($_POST['CEPAnuncio'] != "" And $_POST['numero'] != "") 
            {


                $anuncio->codanuncio   = $_POST["CodAnuncio"]; 
                $anuncio->cep          = $_POST["CEPAnuncio"];
                $anuncio->estado       = $_POST["estado"];
                $anuncio->municipio    = $_POST["municipio"];
                $anuncio->bairro       = $_POST["bairro"];
                $anuncio->rua          = $_POST["rua"];
                $anuncio->numero       = $_POST["numero"];


                $anuncio->alterarEndereco(); 

                echo "<script> alert('Imagem alterada com sucesso.');
                window.location='".DOMINIO."meuPerfil'</script>";
            } 

            if($_POST['quantidadematerial'] != "") 
            {

                $anuncio->codanuncio         = $_POST["CodAnuncio"]; 
                $anuncio->quantidadematerial = $_POST["quantidadematerial"];



                $anuncio->alterarQuantidadeMaterial(); 

                echo "<script> alert('Imagem alterada com sucesso.');
                window.location='".DOMINIO."meuPerfil'</script>";
            } 

            
            if($_POST['descricao'] != "") 
            {

                $anuncio->codanuncio = $_POST["CodAnuncio"]; 
                $anuncio->descricao  = $_POST["descricao"];



                $anuncio->alterarDescricao(); 

                echo "<script> alert('Imagem alterada com sucesso.');
                window.location='".DOMINIO."meuPerfil'</script>";
            } 
             
        }            
        function AlterarImagem(){


            //instanciando classe anuncio
            $anuncio = new Anuncio();
            

            //atribuindo valores para os atributos pelo mÃĐtodo set
            $nomeArquivo            = $_FILES["imagem"]["name"];
            $nomeTemp               = $_FILES["imagem"]["tmp_name"];
            $anuncio->codanuncio    = $_POST["codanuncio"];
            $anuncio->imagemantiga  = $_POST["imagemAntiga"];


            // Excluindo imagem antiga
            $arquivo = "recursos/img/$anuncio->imagemantiga";
            unlink($arquivo);
             
            $anuncio->codanuncio = $_POST['codanuncio'];
 
            // pegar a extensão do arquivo
            $info     = new SplFileInfo($nomeArquivo);
            $extensao = $info->getExtension();
            $novoNome = md5(microtime()) . ".$extensao"; 
     
            $pastaDestino       = "recursos/img/$novoNome";
     
            move_uploaded_file($nomeTemp, $pastaDestino);
     
            $anuncio->imagem = $novoNome;

            $anuncio->alterarImagem(); 

            echo "<script> alert('Imagem alterada com sucesso.');
            window.location='".DOMINIO."meuPerfil'</script>";

        }
    }