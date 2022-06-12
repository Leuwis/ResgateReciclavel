<?php

class Anuncio {

    //atributos
    private $codanuncio;
    private $codusuario;
    private $statusanuncio;
    private $descricao;
    private $donoanuncio;
    private $dataanuncio;
    private $datacriacaoanuncio;
    private $quantidadematerial;
    private $cep;
    private $estado;
    private $municipio;
    private $bairro;
    private $rua;
    private $numero;
    private $imagem;


    //metodos get/set
    function __get($atributo){
        return $this->$atributo;
    }
    function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    //método construtor
    function __construct(){
        include "Conexao.php";
    }

    //cadastrar
    function cadastrar(){
        $con = Conexao::conectar();
        $cmd = $con->prepare("INSERT INTO Anuncio(CodUsuario, StatusAnuncio, Descricao, DataCriacaoAnuncio, QuantidadeMaterial, Imagem, CEP, Estado, Municipio, Bairro, Rua, Numero) 
        VALUES(:codusuario, :statusanuncio, :descricao, :datacriacaoanuncio, :quantidadematerial, :imagem, :cep, :estado, :municipio, :bairro, :rua, :numero)");

        // $cmd = $con->prepare("INSERT INTO Anuncio(CodUsuario, DataAnuncio, QuantidadeMaterial, CEP, Estado, Municipio, Bairro, Rua, Numero) 
        // VALUES(:codusuario, :dataanuncio, :quantidadematerial, :cep, :estado, :municipio, :bairro, :rua, :numero)");


        //enviar valores para os parâmetros SQL
        $cmd->bindParam(":codusuario",          $this->codusuario);
        $cmd->bindParam(":statusanuncio",       $this->statusanuncio);
        $cmd->bindParam(":descricao",           $this->descricao);
        $cmd->bindParam(":imagem",              $this->imagem);
       
        $cmd->bindParam(":datacriacaoanuncio",  $this->datacriacaoanuncio);
        $cmd->bindParam(":quantidadematerial",  $this->quantidadematerial);

        // //verificando se o usuário usou um novo endereço ou o endereço padrão
        if($this->cep !== "" && $this->numero != ""){
            $cmd->bindParam(":cep",                 $this->cep);
            $cmd->bindParam(":estado",              $this->estado);
            $cmd->bindParam(":municipio",           $this->municipio);
            $cmd->bindParam(":bairro",              $this->bairro);
            $cmd->bindParam(":rua",                 $this->rua);
            $cmd->bindParam(":numero",              $this->numero);            
         }else{
            $cmd->bindParam(":cep",                $_SESSION['CEP']);
            $cmd->bindParam(":estado",             $_SESSION['Estado']);
            $cmd->bindParam(":municipio",          $_SESSION['Municipio']);
            $cmd->bindParam(":bairro",             $_SESSION['Bairro']);
            $cmd->bindParam(":rua",                $_SESSION['Rua']);
            $cmd->bindParam(":numero",             $_SESSION['Numero']);   
        }


        //executar comando sql
        $cmd->execute();
    }

    //consultar
    function consultar(){
        $con = Conexao::conectar();
        $cmd = $con->prepare("SELECT * FROM Anuncio WHERE CodAnuncio = :codanuncio");

        //enviar valores para os parâmetros SQL
        $cmd->bindparam(":codanuncio", $this->codanuncio);

        //executar o comando sql
        $cmd->execute();
    }

    //deletar
    function deletar(){
        $con = Conexao::conectar();
        $cmd = $con->prepare("DELETE FROM Anuncio WHERE CodAnuncio = :codanuncio");

        //enviar valores para os parâmetros SQL
        $cmd->bindParam(":codanuncio", $this->codusuario);

        //executar o comando sql
        $cmd->execute();
    }

    //alterar
    function alterar(){
        $con = Conexao::conectar();
        $cmd = $con->prepare("UPDATE Anuncio SET StatusAnuncio = :statusanuncio, DataAnuncio = :dataanuncio,
            QuantidadeMaterial = :quantidadematerial, CEP = :cep, Estado = :estado, Municipio = :municipio,
            Bairro = :bairro, Rua = :rua, Numero = :numero WHERE CodAnuncio = :codanuncio");

        //enviar valores para os parâmetros SQL
        $cmd->bindParam(":statusanuncio",       $this->statusanuncio);
        $cmd->bindParam(":dataanuncio",         $this->dataanuncio);
        $cmd->bindParam(":quantidadematerial",  $this->quantidadematerial);
        $cmd->bindParam(":cep",                 $this->cep);
        $cmd->bindParam(":estado",              $this->estado);
        $cmd->bindParam(":municipio",           $this->municipio);
        $cmd->bindParam(":bairro",              $this->bairro);
        $cmd->bindParam(":rua",                 $this->rua);
        $cmd->bindParam(":numero",              $this->numero);

        //executar comando sql
        $cmd->execute();
    } 
    function alterarEndereco(){
        $con = Conexao::conectar();

        $cmd = $con->prepare("UPDATE Anuncio SET 
        Estado = :estado, 
        Municipio = :municipio, 
        Bairro = :bairro, 
        Rua = :rua, 
        Numero = :numero, 
        CEP = :cep 

        WHERE CodAnuncio = :codanuncio");

        $cmd->bindParam(":cep",         $this->cep);
        $cmd->bindParam(":estado",      $this->estado);
        $cmd->bindParam(":municipio",   $this->municipio);
        $cmd->bindParam(":bairro",      $this->bairro);
        $cmd->bindParam(":rua",         $this->rua);
        $cmd->bindParam(":numero",      $this->numero);
        $cmd->bindParam(":codanuncio",  $this->codanuncio);

        $cmd->execute();


    
    }
    function alterarQuantidadeMaterial() {
        $con = Conexao::conectar();

        $cmd = $con->prepare("UPDATE Anuncio SET 
        QuantidadeMaterial = :quantidadematerial

        WHERE CodAnuncio = :codanuncio");

        $cmd->bindParam(":quantidadematerial", $this->quantidadematerial);
        $cmd->bindParam(":codanuncio",         $this->codanuncio);

        $cmd->execute();


    }
    function alterarDescricao(){
        $con = Conexao::conectar();

        $cmd = $con->prepare("UPDATE Anuncio SET 
        Descricao = :descricao

        WHERE CodAnuncio = :codanuncio");

        $cmd->bindParam(":descricao",  $this->descricao);
        $cmd->bindParam(":codanuncio", $this->codanuncio);

        $cmd->execute();

    }
    function alterarImagem(){
        $con = Conexao::conectar();
        $cmd = $con->prepare("UPDATE Anuncio SET Imagem = :imagem WHERE CodAnuncio = :codanuncio");

        $cmd->bindParam(":imagem",                  $this->imagem);
        $cmd->bindParam(":codanuncio",              $this->codanuncio);

        $cmd->execute();
    }

    
}
    

?>