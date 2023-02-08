<!DOCTYPE html>
<html lange="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Control de Gastos</title>
  <!-- Favicon -->
  <link href="img/egg-svgrepo-com.svg" rel="shorcut icon" type="image/png" />

  <?php

    include 'include/cargaframeworks.php';
    cargaframeworks();

    include 'include/menu.php';
    menu();

    include 'include/error.php';
    error();
    
    /**
     * Mensajes al usuario
     */

    $mensaje = "Ingrese los datos";
    if(isset($_GET['mensaje'])) {
      if($_GET['mensaje']=='uno') { $mensaje = 'El dato ya existe';}
      if($_GET['mensaje']=='dos') { $mensaje = 'El email es inválido';}
      if($_GET['mensaje']=='tres') { $mensaje = 'Los datos son incorrectos';}
    }
  ?>  
 
</head>

<body>
  <!-- Columna Izquierda -->
  <div class="col-6"></div>

  <!-- Cuerpo -->
  <div class="col-6">
    <br><br>
    <h1 class="text-center">TP Final Full Stack Neuquina</h1>
    <h2 class="text-center">Control de gastos</h2>
    <h3 class="text-center">Inicio</h3>
    <br><br>
    
  </div>

  <!-- Columna Derecha -->
  <div class="col-3"></div>

  <!-- Footer -->
  <?php echo "<br><h3 class='text-center'>$mensaje</h3>" ?>
</body>
</html> 