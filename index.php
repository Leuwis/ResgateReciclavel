<?php

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

          

          case "logar":
            $logar = new CadastroUsuario();
            $logar->logar();
          break;
          
          case "cadastro":
            $cad = new CadastroUsuario();
            $cad->telaCadastro();
          break;
          
          case "cadastrarUsuario":
            $cad = new CadastroUsuario();
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

          default:
            echo "pagina não encontrada";
          break;
      }
    }else{
      $inicio = new HomeController();
      $inicio->abrirInicio();
  }

?>
