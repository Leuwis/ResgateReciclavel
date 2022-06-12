<?php
  session_start();
    include "controller/HomeController.php";
    include "controller/UsuarioController.php";
    include "controller/AnuncioController.php";
    include "controller/ChatController.php";

    //Acessando Url Projeto Arthur
    define("DOMINIO", "http://localhost:83/ResgateReciclavel/");

     //Acessando Url Projeto Deivid
     //define("DOMINIO", "http://localhost:8080/ResgateReciclavel/");

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
          
          case "AprenderSite":
            $cad = new HomeController();
            $cad->telaAprenderSite();
          break;


          // case "endereco":
          //  $home = new HomeController();
          //  $home->abrirEndereco();

          // Controllers do Usuário.

          case "logar":
            $logar = new UsuarioController();
            $logar->logar();
          break;
          
          case "sair":
            $sair = new UsuarioController();
            $sair->sair();
          break;
          
          case "alterar-dados-usuario":
            $cad = new UsuarioController();
            $cad->AlterarDadosUsuario();
          break;


          case "cadastrarUsuario":
            $cad = new UsuarioController();
            $cad->cadastrar();
          break;

          //Controllers do Anuncio.

          case "criarAnuncio":
            $anun = new AnuncioController();
            $anun->criarAnuncio();
          break;

          case "alterar-anuncio":
            $anun = new AnuncioController();
            $anun->AlterarAnuncio();
          break;

          case "alterar-imagem":
            $anun = new AnuncioController();
            $anun->AlterarImagem();
          break;

            //Controllers Chat
            case "abrirChat":
              $cha = new ChatController();
              $cha->abrirChat($url[1]);
            break;

            case 'consultarChat':
              $cha = new ChatController();
              $cha->consultar();
            break;

            case 'enviarMensagem':
              $cha = new ChatController();
              $cha->salvarMensagem();
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
