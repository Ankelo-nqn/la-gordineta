<?php
  function menu(){ ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="movimientos.php">Movimientos</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="ventas.php">Ventas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="libro-diario.php">Libro Diario</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="lista.php">Lista</a></li>
            <li><a class="dropdown-item" href="#">Opción 2</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Opción 3</a></li>
            <li><a class="dropdown-item" href="#">Opción 4</a></li>
          </ul>
        </li>
        
      </ul>

      <!-- Busqueda

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Búsqueda</button>
      </form>

      -->
    
    </div>
  </div>
</nav>

<?php
    echo 'Hola mundo';
  }
?>