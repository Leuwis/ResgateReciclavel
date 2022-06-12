<?php

class Chat
{


    //atribuutos
    private $codMensagem;
    private $codUsuario;
    private $codAnunciante;
    private $conteudo;
    private $dataEnvio;
    private $codAnuncio;

    //metodos get/set
    function __get($atributo)
    {
        return $this->$atributo;
    }
    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    //método constutor
    function __construct()
    {
        include "Conexao.php";
    }

    //retornar dados existentes
    function retornar()
    {
        $con = Conexao::conectar();
        $cmd = $con->prepare("SELECT * FROM Mensagem");
        $cmd->execute();
        return $cmd->fetchALL(PDO::FETCH_OBJ);
    }

    //cadastrar
    function cadastrar()
    {
        $con = Conexao::conectar();

        $cmd = $con->prepare("INSERT INTO Mensagem(CodAnuncio, CodUsuario, CodAnunciante, ConteudoMensagem, DataEnvio)
                VALUES(:codAnuncio, :codUsuario, :codAnunciante, :conteudo, :dataEnvio)");

        $cmd->bindParam(":conteudo",      $this->conteudo);
        $cmd->bindParam(":codAnuncio",    $this->codAnuncio);
        $cmd->bindParam(":codUsuario",    $this->codUsuario);
        $cmd->bindParam(":codAnunciante", $this->codAnunciante);
        $cmd->bindParam(":dataEnvio",     $this->dataEnvio);

        $cmd->execute();
    }
}
