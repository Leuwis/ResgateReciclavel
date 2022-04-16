<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Olá <?php echo $_SESSION['Nome'] ?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item"  href="<?php echo DOMINIO; ?>perfil"> Meu Perfil <i class="bi bi-person"></i>  </a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="recursos/php/sair.php"> Sair <i class="bi bi-x-circle"> </i> </a>
  </div>
</div>