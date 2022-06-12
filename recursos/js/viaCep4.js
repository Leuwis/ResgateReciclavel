// Pegando o elemento pelo ID do botão 
let btnCancelar = document.getElementById("btnCancelar");
let btnSalvar = document.getElementById("btnSalvar");
let btnCancelarAnuncio = document.getElementById("btnCancelarAnuncio");
let btnSalvarAnuncio = document.getElementById("btnSalvarAnuncio");


// Definindo que o Display dele é None assim  não sendo apresentado na tela



btnCancelar.hidden = true;
btnSalvar.hidden = true;
btnCancelarAnuncio.hidden = true;
btnSalvarAnuncio.hidden = true;


//Limpando os campos do formulário
// Função de alteração dos dados do usuario
function AltDadosUsuario1() {
    // Desabilitando o disabled dos input
    document.getElementById("Nome").disabled = false;
    document.getElementById("Email").disabled = false;
    document.getElementById("cepUsuario").disabled = false;
    document.getElementById("numeroUsuario").disabled = false;
    // Definindo o display do botão "Cancelar" block assim apresentando na tela
    btnCancelar.hidden = false;
    btnSalvar.hidden = false;

    
}

function CancelarAltDadosUsuario1() {
    // Habilitando o disabled dos input
    document.getElementById("Nome").disabled = true;
    document.getElementById("Email").disabled = true;
    document.getElementById("cepUsuario").disabled = true;
    document.getElementById("numeroUsuario").disabled = true;
    // Definindo que o Display dele é None assim  não sendo apresentado na tela
    btnCancelar.hidden = true;
    btnSalvar.hidden = true;
    
}


// Função de alteração dos dados do usuario
function AltDadosAnuncio() {
    // Desabilitando o disabled dos input
    document.getElementById("CEPAnuncio").disabled = false;
    document.getElementById("numeroAnuncio").disabled = false;
    document.getElementById("quantidadematerial").disabled = false;
    document.getElementById("descricao").disabled = false;




    // Definindo o display do botão "Cancelar" e "Salvar" block assim apresentando na tela
    btnCancelarAnuncio.hidden = false;
    btnSalvarAnuncio.hidden = false;

    
}

function CancelarAltDadosAnuncio() {
    // Habilitando o disabled dos input
    document.getElementById("CEPAnuncio").disabled = true;
    document.getElementById("numeroAnuncio").disabled = true;
    document.getElementById("quantidadematerial").disabled = true;
    document.getElementById("descricao").disabled = true;
    // Definindo que o Display dele é None assim  não sendo apresentado na tela
    btnCancelarAnuncio.hidden = true;
    btnSalvarAnuncio.hidden = true;
    
}










function limparUsuario() {
    document.getElementById('ruaUsuario').value=("");
    document.getElementById('bairroUsuario').value=("");
    document.getElementById('municipioUsuario').value=("");
    document.getElementById('estadoUsuario').value=("");
}

//Verificando o que o json retornou 
function respostaUsuario(conteudo) {

    if ("erro" in conteudo) {
            //CEP não Encontrado.
        limparUsuario();
        alert("CEP não encontrado.");

    } 
    else {
        
        //Atualiza os campos com os valores.
        document.getElementById('ruaUsuario').value=(conteudo.logradouro);
        document.getElementById('bairroUsuario').value=(conteudo.bairro);
        document.getElementById('municipioUsuario').value=(conteudo.localidade);
        document.getElementById('estadoUsuario').value=(conteudo.uf);
    }
}

function pesquisaCepUsuario(valor) {

    //Nova variável "cep" somente com dígitos.
    var cepUsuario = valor.replace(/\D/g, '');

    //Verificando se cep foi informado.
    if (cepUsuario != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cepUsuario)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('ruaUsuario').value="...";
            document.getElementById('bairroUsuario').value="...";
            document.getElementById('municipioUsuario').value="...";
            document.getElementById('estadoUsuario').value="...";

            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/'+ cepUsuario + '/json/?callback=respostaUsuario';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

        } //end if.
        else {
            //cep é inválido.
            limparUsuario();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limparUsuario();

    }

    
};
function limparAnuncio() {
    document.getElementById('ruaAnuncio(').value=("");
    document.getElementById('bairroAnuncio(').value=("");
    document.getElementById('municipioAnuncio(').value=("");
    document.getElementById('estadoAnuncio(').value=("");
}

//Verificando o que o json retornou 
function respostaAnuncio(conteudo) {

    if ("erro" in conteudo) {
            //CEP não Encontrado.
        limparAnuncio();
        alert("CEP não encontrado.");

    } 
    else {
        
        //Atualiza os campos com os valores.
        document.getElementById('ruaAnuncio').value=(conteudo.logradouro);
        document.getElementById('bairroAnuncio').value=(conteudo.bairro);
        document.getElementById('municipioAnuncio').value=(conteudo.localidade);
        document.getElementById('estadoAnuncio').value=(conteudo.uf);
    }
}

function pesquisaCepAnuncio(valor) {

    //Nova variável "cep" somente com dígitos.
    var cepAnuncio = valor.replace(/\D/g, '');

    //Verificando se cep foi informado.
    if (cepAnuncio != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cepAnuncio)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('ruaAnuncio').value="...";
            document.getElementById('bairroAnuncio').value="...";
            document.getElementById('municipioAnuncio').value="...";
            document.getElementById('estadoAnuncio').value="...";

            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/'+ cepAnuncio + '/json/?callback=respostaAnuncio';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

        } //end if.
        else {
            //cep é inválido.
            limparAnuncio();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limparAnuncio();
    }
    
};



