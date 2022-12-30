<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Control de Gastos</title>
  <?php
    include 'include/cargabootstrap.php';
    include 'include/menu.php';
    include 'include/error.php';
    error();
    cargabootstrap();
    menu();
    $mensaje = $_GET['mensaje'];
  ?>  
  <script type="text/javascript">
    function mensaje(){
      alert("Un mensaje de prueba");
    }
  </script>
</head>

<body>
  <!-- Columna Izquierda -->
  <div class="col-6"></div>

  <!-- Cuerpo -->
  <div class="col-6">
    <br><br>
    <h1 class="text-center">La Gordineta Neuquina</h1>
    <h2 class="text-center">Control de gastos</h2>
    <h3 class="text-center">Inicio</h3>
    <br><br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <button class="btn btn-primary me-md-2" type="button" onclick="js/mensaje.js" >Externo</button>
      <button class="btn btn-primary" type="button" onclick="mensaje()">Mensaje</button>
    </div>
  </div>

  <!-- Columna Derecha -->
  <div class="col-3"></div>

  <!-- Footer -->
  <?php echo "<br><h3 class='text-center'>$mensaje</h3>" ?>
</body>
</html>