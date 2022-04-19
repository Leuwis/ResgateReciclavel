function limpa(){
    
    document.getElementById("email").value = "";
    document.getElementById("senha").value = "";
    document.getElementById("nome").value = "";
    document.getElementById("cep").value = "";
    document.getElementById("estado").value = "";
    document.getElementById("cidade").value = "";
    document.getElementById("bairro").value = "";
    document.getElementById("rua").value = "";
    document.getElementById("numero").value = "";

}

let end = document.getElementById("endereco");

end.hidden = true;

function adicionarEnd(){
    if(end.hidden){
        end.hidden = false;
    }else{
        end.hidden = true;

    }
     }
     function este(){ 
         
        if(end.hidden){
        end.hidden = false;
    }else{
        end.hidden = true;

    }
}