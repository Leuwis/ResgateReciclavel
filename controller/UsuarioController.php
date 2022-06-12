<?php
   

   //mostrando model cadastro
   include "model/Usuario.php";


   class UsuarioController{

      function telaCadastro(){
         
         //mostrando tela de cadastro
         include "view/usuario.php";
      }

      
      function cadastrar(){

         //instanciando a classe usuario
         $usu = new Usuario();

         //variaveis privadas recebendo valores pelo set.    
         $usu->nome = $_POST["nome"];
         $usu->email = $_POST["email"];

         //criptografando a senha
         $usu->senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);        
          
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
         $dadosUsuario = $usu->logar();

         if($dadosUsuario && password_verify($_POST["senha"], $senha->senha)){

            $usu->email=$_POST["senha"];

         } 

         


         if ($dadosUsuario) {

            //session_start();
            $_SESSION['CodUsuario'] = $dadosUsuario['CodUsuario'];
            $_SESSION['Email'] = $dadosUsuario['Email'];
            $_SESSION['Nome'] = $dadosUsuario['Nome'];
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

      function AlterarDadosUsuario(){

         $usu = new Usuario();
         

         if($_POST['Nome'] != "") 
         {
            $usu->codusuario     = $_SESSION["CodUsuario"]; 
            $usu->nome           = $_POST["Nome"];
            $usu->alterarNome(); 

            $_SESSION['Nome'] = $usu->nome;


         }

         if($_POST['Email'] != "") 
         {
            $usu->codusuario     = $_SESSION["CodUsuario"]; 
            $usu->email          = $_POST["Email"];
            $usu->alterarEmail(); 

            $_SESSION['Email'] = $usu->email;



         }

         if($_POST['cepUsuario'] != "" And $_POST['numero'] != "") 
         {

            $usu->codusuario   = $_SESSION["CodUsuario"]; 
            $usu->cep          = $_POST["cepUsuario"];
            $usu->estado       = $_POST["estado"];
            $usu->municipio    = $_POST["municipio"];
            $usu->bairro       = $_POST["bairro"];
            $usu->rua          = $_POST["rua"];
            $usu->numero       = $_POST["numero"];


            $usu->alterarEndereco(); 
   
   
            $_SESSION['CEP'] = $usu->cep;          
            $_SESSION['Estado'] = $usu->estado;       
            $_SESSION['Municipio'] = $usu->municipio;   
            $_SESSION['Bairro'] = $usu->bairro;       
            $_SESSION['Rua'] = $usu->rua;          
            $_SESSION['Numero'] = $usu->numero;



         } 

         $_SESSION['alertaSucessoAlteracao'] = true;
         Header("Location:". DOMINIO. "meuPerfil");
 

      }

   }
   


?>