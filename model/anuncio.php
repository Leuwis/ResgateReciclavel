<?php

class Anuncio {

    //atributos
    private $codanuncio;
    private $codusuario;
    private $statusanuncio;
    private $dataanuncio;
    private $quantidadematerial;
    private $cep;
    private $estado;
    private $municipio;
    private $bairro;
    private $rua;
    private $numero;


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
    function  cadastrar(){
        $con = Conexao::conectar();
        $cmd = $con->prepare("INSERT INTO Anuncio(CodUsuario, StatusAnuncio, DataAnuncio, QuantidadeMaterial, CEP, Estado, Municipio, Bairro, Rua, Numero) 
        VALUES(:codusuario, :statusanuncio, :dataanuncio, quantidadematerial, :cep, :estado, :municipio, :bairro, :rua, :numero)");

        //enviar valores para os parâmetros SQL
        $cmd->bindParam(":codusuario",          $this->codusuario);
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
}
    

?>