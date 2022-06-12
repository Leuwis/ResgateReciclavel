<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Olá 
    <?php $NomeCompleto = $_SESSION['Nome'];
    $PrimeiroNome = strtok($NomeCompleto, ' ');
    echo $PrimeiroNome;?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item"  href="<?php echo DOMINIO.'meuPerfil'; ?>"> Meu Perfil <i class="bi bi-person"></i>  </a>
    <div class="dropdown-divider"></div>
    <a class=" dropdown-item" id="sair" style="background-color: #FF6347; color: white;" href="<?php echo DOMINIO.'sair';?>"> Sair <i class="bi bi-x-circle"> </i> </a>
  </div>
</div>
