<!DOCTYPE html>
<html lange="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista</title>
  
  <!-- Favicon -->
  <link href="img/egg-svgrepo-com.svg" rel="shorcut icon" type="image/png" />

  <?php
    
    // include 'include/cargabootstrap.php';
    // cargabootstrap();

    include 'include/cargaframeworks.php';
    cargaframeworks();
    include 'include/menu.php';
    menu();
    include 'include/error.php';
    error();
      
  ?>
  
  <!-- Java de dataTable -->

  <script src="js/lista.js"></script>


</head>
<body>
  <br><br><br>
  <img src="img/egg-svgrepo-com.svg" width=80 alt="">
  <h1 class="text-center">La Gordineta Neuquina</h1>
  <h2 class="text-center"></h2>

  <!-- Maquetar tabla precios -->
  <h2 class="text-center">Lista de productos y precios</h2>
  <br><br>
  <table id="lista" class="display nowrap" style="width:100%">
    <thead>
      <tr>
        <th>Articulo</th>
        <th>Descripción</th>
        <th>Foto</th>
        <th>Incidencia</th>
        <th>Precio</th>
      </tr>
    </thead>

  </table>


</body>
</html>