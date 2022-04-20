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

          case "entrar":
            $entrar = new HomeController();
            $entrar->telaEntrar();
          break;
          
          case "sair":
            $sair = new UsuarioController();
            $sair->sair();
          break;
          
          case "logar":
            $logar = new UsuarioController();
            $logar->logar();
          break;
          
          case "cadastro":
            $cad = new UsuarioController();
            $cad->telaCadastro();
          break;
          
          case "cadastrarUsuario":
            $cad = new UsuarioController();
            $cad->cadastrar();

          case "inicio":
            $ini = new HomeController();
            $ini->abrirInicio();
          break;

          case "perfil":
            $ini = new HomeController();
            $ini->abrirMeuPerfil();
          break;

          // case "endereco":
          //    $home = new HomeController();
          //    $home->abrirEndereco();

          //anuncio
          case "anuncio":
            $anun = new AnuncioController();
            $anun->telaAnuncio();
          break;

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
      $inicio->abrirInicio();
  }

?>
