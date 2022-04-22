<?php

include "model/Anuncio.php";

    class AnuncioController{

        //abir tela de criação de anuncio
        function telaAnuncio(){
            include "view/anuncio.php";
        }

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
                alert('Informe um endereço!');
                window.location=' ".DOMINIO."anuncio';
                </script>";
            }
            $data = date('Y-m-d');
            //instanciando classe anuncio
            $anuncio = new Anuncio();

            //atribuindo valores para os atributos pelo método set
            $anuncio->statusanuncio = true;
            $anuncio->codusuario = $_SESSION['CodUsuario'];
            $anuncio->dataanuncio = $_POST['data'];
            $anuncio->datacriacaoanuncio = $data;
            $anuncio->quantidadematerial = $_POST['quantidade'];

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
    }