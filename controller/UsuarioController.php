<?php

   //mostrando model cadastro
   include "model/Usuario.php";


   class CadastroUsuario{

      function telaCadastro(){
         
         //mostrando tela de cadastro
         include "view/usuario.php";
      }

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
                alert('Dados gravados com sucesso!');
                window.location=' ".DOMINIO."inicio';
             </script>"; 
      }

      function logar(){
         $usu = new Usuario();
         
         if(empty ($_POST["email"]) && empty($_POST["senha"]))
         {
            echo "<script>
            alert('Digite o email e a senha.');
            window.location=' ".DOMINIO."entrar';
            </script>";

         } else if (empty($_POST["email"]))
         {
            echo "<script>
            alert('Digite o email.');
            window.location=' ".DOMINIO."entrar';
            </script>";

         } else if(empty($_POST["senha"]))
         {
            echo "<script>
            alert('Digite a senha.');
            window.location=' ".DOMINIO."entrar';
            </script>";
         }


         $usu->email=$_POST["email"];
         $usu->senha=$_POST["senha"];

         $usu->buscarUsuario();
         $dadosUsuario = $usu -> buscarUsuario();

         if ($dadosUsuario) {

            $dado = $usu -> buscarUsuario();
            session_start();
            $_SESSION['CodUsuario'] = $dado['CodUsuario'];
            $_SESSION['Nome'] = $dado['Nome'];
            $_SESSION['CEP'] = $dado['CEP'];
            $_SESSION['Estado'] = $dado['Estado'];
            $_SESSION['Municipio'] = $dado['Municipio'];
            $_SESSION['Bairro'] = $dado['Bairro'];
            $_SESSION['Rua'] = $dado['Rua'];
            $_SESSION['Numero'] = $dado['Numero'];



            
            


            echo "<script>
            alert('Logado com Sucesso');
            window.location=' ".DOMINIO."inicio';
            </script>";
         } else 
         {
            echo "<script>
            alert('Erro!!');
            window.location=' ".DOMINIO."inicio';
            </script>";
         }

         
      }
   }

   


?>