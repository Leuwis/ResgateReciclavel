<?php

    class HomeController{
        

        function telaInicio(){

            $usu = new Usuario();
            $dadosAnuncio = $usu->buscarAnuncios();
            include "view/inicio.php";
        }

        function telaAprenderSite(){ 

            include "view/aprenderSite.php";
        }

        function telaCadastro(){
         
            //mostrando tela de cadastro
            include "view/usuario.php";
         }
         
        function telaEntrar(){

            //mostrando a tela entrar
            include "view/entrar.php";
        }

        function telaMeuPerfil() {
            //mostrando tela meu perfil
            $usu = new Usuario();
            $usu->codusuario = $_SESSION['CodUsuario'];
            $dadosAnuncio = $usu->buscarAnunciosUsuario();


            include "view/meuPerfil.php";
        }

        function telaAnuncio(){ 
            if(empty ($_SESSION['CodUsuario'])) 
            {
                // Caso o usuário não estiver logado define como true a session que mostrará o alerta 
                // que o usuário deve se cadastrar e logar no site para acessar a página de criação de anúncio e
                // redireciona para a pagina principal

                $_SESSION['alertaLogar'] = true;
                Header("Location:". DOMINIO. "inicio");
            } else 
            {
                // Mostrando a pagina de criação de anúncio
                include "view/anuncio.php";   
            }
                        
        }
    }


    

?>