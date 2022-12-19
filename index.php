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
</head>

<body>
  <br><br>
  <h1 class="text-center">La Gordineta Neuquina</h1>
  <h2 class="text-center">Control de gastos</h2>
  <h3 class="text-center">Inicio</h3>
  <br><br>
  <?php echo "<br><h3 class='text-center'>$mensaje</h3>" ?>
</body>
</html>