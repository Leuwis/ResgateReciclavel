<?php
  session_start();
    include "controller/HomeController.php";
    include "controller/UsuarioController.php";
    include "controller/AnuncioController.php";

    //Acessando Url Projeto Arthur
    //define("DOMINIO", "http://localhost/ResgateReciclavel/");

     //Acessando Url Projeto Deivid
     define("DOMINIO", "http://localhost:83/ResgateReciclavel/");

    if($_GET){

      $url = $_GET["url"];
      $url = explode("/", $url);


        switch($url[0]){

          //Controllers das páginas.

          case "entrar":
            $entrar = new HomeController();
            $entrar->telaEntrar();
          break;

          case "inicio":
            $ini = new HomeController();
            $ini->telaInicio();
          break;

          case "meuPerfil":
            $ini = new HomeController();
            $ini->telaMeuPerfil();
          break;

          case "anuncio":
            $anun = new HomeController();
            $anun->telaAnuncio();
          break;

          case "cadastro":
            $cad = new HomeController();
            $cad->telaCadastro();
          break;

          

          // case "endereco":
          //  $home = new HomeController();
          //  $home->abrirEndereco();

          // Controllers do Usuário.

          case "cadastrarUsuario":
            $cad = new UsuarioController();
            $cad->cadastrar();
          break;

          case "logar":
            $logar = new UsuarioController();
            $logar->logar();
          break;
          
          case "sair":
            $sair = new UsuarioController();
            $sair->sair();
          break;
          
          case "alterar-nome":
            $cad = new UsuarioController();
            $cad->alterarNome();
          break;

          case "alterar-email":
            $cad = new UsuarioController();
            $cad->alterarEmail();
          break;

          case "alterar-endereco":
            $cad = new UsuarioController();
            $cad->cadastrar();
          break;

          //Controllers do Anuncio.

          case "criarAnuncio":
            $anun = new AnuncioController();
            $anun->criarAnuncio();
          break;

          default:
            echo "pagina não encontrada";
          break;
      }
    }else{
      $inicio = new HomeController();
      $inicio->telaInicio();
  }

?>
