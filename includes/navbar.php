<link href="../vista/css/sidebar.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<nav class="navbar navbar-expand-lg  navbar-dark bg-green">
    <div class="container-fluid">
      <a class="navbar-brand" href="../controlador/home.php"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav ms-md-auto gap-2">
          <li class="nav-item rounded">
            <a class="nav-link active" aria-current="page" href="../controlador/home.php">Inicio</a>
          </li>
          <li class="nav-item rounded">
            <a class="nav-link" href="#">Sobre Nosotros</a>
          </li>
          <li class="nav-item rounded">
            <a class="nav-link" href="../controlador/contactar.php">Contacta</a>
          </li>
          <li class="nav-item dropdown rounded">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Perfil</a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
               <?php if ($_SESSION['email']){ ?>
                <li><a class="dropdown-item" href="../controlador/micuenta.php">Mi cuenta</a></li>
            
                <?php }else{ ?>
                    <li><a class="dropdown-item" href="../controlador/login.php">Acceder</a></li>
                <?php }?>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="../controlador/logout.php">Cerrar Sesión</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 