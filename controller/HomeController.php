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
            //mostrando tela meu perfil
            include "view/meuPerfil.php";
        }
        
        function telaAnuncio() {
            //mostrando tela anuncio
            include "view/anuncio.php";
        }

    }
    

?>