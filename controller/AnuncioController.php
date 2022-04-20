<?php

include "model/Anuncio.php";

    class AnuncioController{

        //abir tela de criação de anuncio
        function telaAnuncio(){
            include "view/anuncio.php";
        }


        //cadastrar anuncio no bd
        function criarAnuncio(){

            //instanciando classe anuncio
            $anuncio = new Anuncio();

            //atribuindo valores para os atributos pelo método set
            $anuncio->statusanuncio = true;
            $anuncio->codusuario = $_SESSION['CodUsuario'];
            $anuncio->dataanuncio = $_POST['data'];
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
             
        }
    }