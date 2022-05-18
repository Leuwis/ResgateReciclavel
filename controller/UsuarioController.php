<?php

   //mostrando model cadastro
   include "model/Usuario.php";


   class UsuarioController{


      function cadastrar(){

         //instanciando a classe usuario
         $usu = new Usuario();

         //variaveis privadas recebendo valores pelo set.    
         $usu->email = $_POST["email"];
         $usu->senha = $_POST["senha"];
         $usu->nome = $_POST["nome"];

         //verificando se o usuario informou um endereco
         if(isset ($_POST["cep"]) && isset($_POST["numero"])){

            $usu->cep = $_POST["cep"];
            $usu->estado = $_POST["estado"];
            $usu->municipio = $_POST["municipio"];
            $usu->bairro = $_POST["bairro"];
            $usu->rua = $_POST["rua"];
            $usu->numero = $_POST["numero"];
         }


         //cadastrando
         $usu->cadastrar();

         echo "<div>salvos</div>";
         echo "<script>
                alert('Dados Cadastrados com sucesso!');
                window.location=' ".DOMINIO."inicio';
             </script>"; 
      }

      function logar(){
         $usu = new Usuario();
      
         $usu->email=$_POST["email"];
         $usu->senha=$_POST["senha"];

         $usu->buscarUsuario();
         $dadosUsuario = $usu -> buscarUsuario();


         if ($dadosUsuario) {

            //session_start();
            $_SESSION['CodUsuario'] = $dadosUsuario['CodUsuario'];
            $_SESSION['Nome'] = $dadosUsuario['Nome'];
            $_SESSION['Email'] = $dadosUsuario['Email'];
            $_SESSION['CEP'] = $dadosUsuario['CEP'];
            $_SESSION['Estado'] = $dadosUsuario['Estado'];
            $_SESSION['Municipio'] = $dadosUsuario['Municipio'];
            $_SESSION['Bairro'] = $dadosUsuario['Bairro'];
            $_SESSION['Rua'] = $dadosUsuario['Rua'];
            $_SESSION['Numero'] = $dadosUsuario['Numero'];
            $_SESSION['Descricao'] = $dadosUsuario['Descricao'];

            Header("Location:". DOMINIO. "inicio");
 
         } else 
         {
            $_SESSION['ErroLogar'] = true;
            Header("Location:". DOMINIO. "entrar");
         }

         
      }
      function sair(){
         include "view/sair.php";
      }

      function alterarNome(){

         if(empty($_POST["NovoNome"])) 
         {
            echo "<script>
            alert('Digite o nome para fazer a alteração');
            window.location='".DOMINIO."meuPerfil';
            </script>";
         } else 
         {
            $usu = new Usuario();
            $usu->codusuario     = $_SESSION["CodUsuario"]; 
            $usu->nome           = $_POST["NovoNome"];
            $usu->alterarNome(); 
   
   
            $_SESSION['Nome'] = $usu->nome;
   
    
            //alterei o direcionamento do script para consultar-usuario
            echo "<script>
                    alert('Dados gravados com sucesso!');
                    window.location='".DOMINIO."meuPerfil';
                  </script>";
         }
      }

      function alterarEmail(){
         if(empty($_POST["NovoEmail"])) 
         {
            echo "<script>
            alert('Digite o Email para fazer a alteração');
            window.location='".DOMINIO."meuPerfil';
            </script>";
         } else 
         {
            $usu = new Usuario();
            $usu->codusuario     = $_SESSION["CodUsuario"]; 
            $usu->email           = $_POST["NovoEmail"];
            $usu->alterarEmail(); 
   
   
            $_SESSION['Email'] = $usu->email;
   
    
            //alterei o direcionamento do script para consultar-usuario
            echo "<script>
                    alert('Dados gravados com sucesso!');
                    window.location='".DOMINIO."meuPerfil';
                  </script>";
         }

   }
   }
   


?>