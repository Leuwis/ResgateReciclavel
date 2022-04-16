<?php

    class HomeController{
        

        function abrirInicio(){

            //mostrando tela inicial
            include "view/inicio.php";
        }

        function telaEntrar(){

            //mostrando a tela entrar
            include "view/entrar.php";
        }

        function abrirMeuPerfil() {
            include "view/meuPerfil.php";
        }
        
        function telaAnuncio() {
            include "view/anuncio.php";
        }

    }
    

?>