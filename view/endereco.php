<div id="endereco" class="row mt-3">
    <div class="col-sm-6 align-self-end" >
        <label for="inputName5" class="form-label">CEP</label>

        <div class="input-group mb-3">
            <input id="cep" type="text" class="form-control" onblur="pesquisaCepUsuario(this.value);"  maxlength="9" value="" name="cep" placeholder="Digite seu cep...">
        </div>
    </div>

        <div class="col-sm-6">
                <label for="inputName5" class="form-label">Estado</label>
                <input id="estadoUsuario" type="name" maxlength="2" class="form-control" aria-describedby="nameHelpBlock" name="estado"  value="" readonly>
            </div>
            <div class="col-sm-6">
                <label for="inputName5" class="form-label">Município</label>
                <input id="municipioUsuario" type="name" class="form-control" aria-describedby="nameHelpBlock" name="municipio" value="" readonly>
            </div>

            <div class="col-sm-6">
                <label for="inputName5" class="form-label">Bairro</label>
                <input id="bairroUsuario" type="name" class="form-control" aria-describedby="nameHelpBlock" name="bairro" value="" readonly>
            </div>

            <div class="col-sm-6">
                <label for="inputName5" class="form-label">Rua</label>
                <input id="ruaUsuario" type="name" class="form-control" aria-describedby="nameHelpBlock" name="rua"  value="" readonly>
            </div>
            <div class="col-sm-6">
                <label for="inputName5" class="form-label">Número</label>
                <input id="numero" type="name" class="form-control" aria-describedby="nameHelpBlock" placeholder="Digite o número da sua residência..." name="numero">
            </div>
            
        </div>
        
    </div>
        
</div>
