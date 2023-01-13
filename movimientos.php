<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movimientos</title>

  <!-- Favicon -->
  <link href="img/egg-svgrepo-com.svg" rel="shorcut icon" type="image/png" />

<?php
    include 'include/cargaframeworks.php';
    cargaframeworks();

    include 'include/error.php';
    error();

    include 'include/menu.php';
    menu();
    $mensaje = 'Estamos registrando un movimiento';
  ?>  

</head>

<!-- compras.php y ventas.php son copia de registrarse.php recortado y adaptado-->

<body>
  <!-- Cabecera -->
  <br><br>
  <h1 class="text-center">La Gordineta Neuquina</h1>
  <h2 class="text-center">Movimientos</h2>
  <br><br>
  <div class="col-4"></div>

  <!-- Cuerpo -->

  <section class="content">
    <div class="row">
      <div class="col-3"></div>

      <!-- <div class="col-sm6 offset-sm-3"> -->
      <div class="col-6">  
        <div class="box box-warning">
          <div class="box-header with-border">
            <h3 class="box-title">Dar alta de movimientos</h3>
          </div>
          <form action="movimientos_sql.php" method="POST" class="user">
            <div class="box-body">
              <div class="form-group">
                <!-- Opciones de concepto-->  
                <label for="concepto" style="color:green" class="font-weight-bold form-label">Ingrese el concepto: </label>
                <input type="text" id="concepto" name="concepto" placeholder="Escriba para buscar..." class="form-control form-control-user" list='listaDatos' required>
                <datalist id="listaDatos">
                  <option value="Mercaderías de reventa">
                  <option value="Combustibles y lubricantes">
                  <option value="Viáticos">
                </datalist>
              </div>
              <br>
              <div class="form-group">
                <label for="importe" style="color:green" class="font-weight-bold">Ingrese el importe:    </label>
                <input type="number" id="importe" name="importe" placeholder="Escriba el importe" class="form-control form-control-user" required>
              </div>
              <br>
              <!-- Ingreso o Egreso -->
                <fieldset>
                  <legend>Tipo de movimiento</legend>
                  <div class="form-group">
                    <label>
                    <input type="radio" name="movim" value="ingreso" required>Ingreso
                    </label>
                  </div>
                  <div class="form-group">
                    <label>
                    <input type="radio" name="movim" value="egreso">Egreso
                    </label>
                  </div>
                </fieldset>
                <br>
              <div class="form-group">
                <label for="obs" style="color:green" class="font-weight-bold">Notas: </label>
                <input type="text" id="obs" name="obs" placeholder="Notas adicionales" class="form-control form-control-user">
              </div>
            </div> 

            
            <!-- Footer -->
            <div class="box-footer">
              <br><br>
              <button type="submit" class="btn btn-primary container-fluid">Cargar registro</button>
              <br><br>
              <div class="col-4 mx-auto">
                <a href="index.php" class="btn btn-lg btn-success container-fluid">Salir</a>
              </div>
              
            
              <!-- Mensaje al usuario -->
              <?php echo $mensaje; ?>                  
            </div>
          </form>
        </div> <!-- Box warning -->
      </div> <!-- col-6 -->
    </div> <!-- row -->
  </section>
  
</body>
</html>