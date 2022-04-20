//Limpando os campos do formulário
function limpar() {
    document.getElementById('rua').value=("");
    document.getElementById('bairro').value=("");
    document.getElementById('cidade').value=("");
    document.getElementById('uf').value=("");
}
//Verificando o que o json retornou 
function resposta(conteudo) {

    if ("erro" in conteudo) {
            //CEP não Encontrado.
        limpar();
        alert("CEP não encontrado.");

    } 
    else {
        
        //Atualiza os campos com os valores.
        document.getElementById('rua').value=(conteudo.logradouro);
        document.getElementById('bairro').value=(conteudo.bairro);
        document.getElementById('cidade').value=(conteudo.localidade);
        document.getElementById('uf').value=(conteudo.uf);
    }
}

function pesquisaCep(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verificando se cep foi informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('rua').value="...";
            document.getElementById('bairro').value="...";
            document.getElementById('cidade').value="...";
            document.getElementById('uf').value="...";

            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=resposta';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

        } //end if.
        else {
            //cep é inválido.
            limpar();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpar();
    }
};
function limpa2(){
    
    
    console.log("ola"   );
            //  document.getElementById("senha").value = "";
            //  document.getElementById("nome").value = "";
            //  document.getElementById("email").value = "";
             //document.getElementById("cep").value = "";
            // document.getElementById("uf").value = "";
            //  document.getElementById("cidade").value = "";
            //  document.getElementById("bairro").value = "";
            //  document.getElementById("rua").value = "";
            //  document.getElementById("numero").value = "";
    
    }