<?php

    class Usuario{

        //atributos
        //para setar valores para esses atributos é necessario chamar a intancia da classe e usar o nome que foi definido para cada atributo mesmo fora da classe.
        private $codusuario;
        private $email;
        private $senha;
        private $nome;
        private $cep;
        private $estado;
        private $municipio;
        private $bairro;
        private $rua;
        private $numero;
    
    
        //get/set
        function __get($atributo){

            return $this->$atributo;

        }
        function __set($atributo, $valor){

            $this->$atributo = $valor;

        }


        //construtor (executa automaticamente)
        function __construct(){
           include "model/Conexao.php";
        }

        //metodo cadastrar
        function cadastrar(){

            
            $con = Conexao::conectar();
            
            //verificando se o cep foi informado
            if($this->cep != "" && $this->numero !=""){

                $cmd = $con->prepare("INSERT INTO Usuario(Email, Senha, Nome, CEP, Estado, Municipio, Bairro, Rua, Numero)
                VALUES (:email, :senha, :nome, :cep, :estado, :municipio, :bairro, :rua, :numero)");
        
                //passando os valores para o parametro sql
                $cmd->bindParam(":email",       $this->email);
                $cmd->bindParam(":senha",       $this->senha);
                $cmd->bindParam(":nome",        $this->nome);
                $cmd->bindParam(":cep",         $this->cep);
                $cmd->bindParam(":estado",      $this->estado);
                $cmd->bindParam(":municipio",   $this->municipio);
                $cmd->bindParam(":bairro",      $this->bairro);
                $cmd->bindParam(":rua",          $this->rua);
                $cmd->bindParam(":numero",      $this->numero);
            
            }else{

                $cmd = $con->prepare("INSERT INTO Usuario(Email, Senha, Nome) VALUES (:email, :senha, :nome)");
                $cmd->bindParam(":email",       $this->email);
                $cmd->bindParam(":senha",       $this->senha);
                $cmd->bindParam(":nome",        $this->nome);
            }

            $cmd->execute();
        }

        //método consultar
        function consultar(){

            $con = Conexao::conectar();
            $cmd = $con->prepare("SELECT * FROM Usuario WHERE CodUsuario = :codusuario");

            //atribuindo valor a variavel auxiliar e passando para os parametros sql
            $cmd->bindParam(":codusuario", $codusuario);

            $cmd->execute();

            // fetchALL buscando dados;
            //FETCH_OBJ tranformando em obj
            return $cmd->fetchALL(PDO::FETCH_OBJ);
        }


        //metodo excluir
        function excluir(){

            $con = Conexao::conectar();
            $cmd = $con->prepare("DELETE FROM Usuario WHERE CodUsuario = :codusuario");

            //atribuindo valor a variavel auxiliar e passando para os parametros sql
            $cmd->bindParam(":codusuario", $this->codusuario);

            //executando o comando sql
            $cmd->execute();
        }

        //metodo entrar
        function buscarUsuario(){
            $con = Conexao::conectar();

            $cmd = $con->prepare("SELECT * FROM Usuario WHERE Email = :email AND Senha = :senha");

            $cmd->bindParam(":email", $this->email);
            $cmd->bindParam(":senha", $this->senha);

            $cmd->execute();
            return $cmd->fetch();


        }

    }


?>