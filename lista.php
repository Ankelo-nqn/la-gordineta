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
    
    include 'include/cargaframeworks.php';
    cargaframeworks();

    include 'include/menu.php';
    menu();

    include 'include/error.php';
    error();
      
  ?>
  
  <!-- dataTable -->

  <script src="js/lista.js"></script>


</head>
<body>
  <br><br><br>
  <img src="img/egg-svgrepo-com.svg" width=80 alt="">
  <h1 class="text-center">TP Final Full Stack</h1>
  <h2 class="text-center"></h2>

  <!-- Maquetar tabla precios -->
  <h2 class="text-center">Lista de productos y precios</h2>
  <br><br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-6"> <!-- table -->
        <table  class="display nowrap table table-striped table-bordered table-dark table-hover table-sm" 
        id="lista"style="width:100%">
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
        </div> <!-- col-3 table -->
        <div class="col-3"></div>
      </div> <!-- row -->
    </div> <!--container-fluid -->
      

</body>
</html>