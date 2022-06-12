<?php

include "model/Chat.php";

class ChatController
{

    function abrirChat($id)
    {
        $cha = new Chat();
        $dados = $cha->retornar();


        include "view/chat.php";
    }

    function salvarMensagem()
    {
        $cha = new Chat();

        $cha->conteudo = $_POST['conteudo'];
        $cha->codAnuncio = $_POST['codAnuncio'];
        $cha->codAnunciante = $_POST['codAnunciante'];
        $cha->codUsuario = $_SESSION['CodUsuario'];

        $data = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
        $cha->dataEnvio = $data->format('Y-m-d H:i');

        $cha->cadastrar();

         echo "<script>
                alert('Dados Cadastrados com sucesso!');
                window.location=' ".DOMINIO."inicio';
             </script>"; 
    }

    function consultar()
    {
        $cha = new Chat();
        $mensagem = $cha->retornar();
    }
}
