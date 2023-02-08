<!DOCTYPE html>
<html lange="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>

    <!-- Favicon -->
    <link href="img/egg-svgrepo-com.svg" rel="shorcut icon" type="image/png" />
    
    <?php
    
      include 'include/cargaframeworks.php';
      cargaframeworks();

      include 'include/menu.php';
      menu();
    
      include 'include/error.php';
      error();
     
      $mensaje = 'Estamos registrando una venta';
    
    ?>  
  </head>
  <!-- compras.php y ventas.php son copia de registrarse.php recortado y adaptado-->
  <body>
    <!-- Cabecera -->
    <br><br>
    <h1 class="text-center">TP Final Full Stack Neuquina</h1>
    <h2 class="text-center">Ventas</h2>
    <br><br>
    <div class="col-4"></div>

    <!-- Cuerpo -->
    <!-- 
      <label for="exampleDataList" class="form-label">Concepto de compra</label>
      <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
      <datalist id="datalistOptions">
        <option value="Mercaderías de reventa">
        <option value="Combustibles y lubricantes">
        <option value="Viáticos">
      </datalist>
    -->

    <section class="content">
        <div class="row">
          <div class="col-3"></div>

          <!-- <div class="col-sm6 offset-sm-3"> -->
          <div class="col-6">  
            <div class="box box-warning">
              <div class="box-header with-border">
                <h3 class="box-title">Dar alta ventas</h3>
              </div>
              <form action="registrarse_ventas_sql.php" method="POST" class="user">
                <div class="box-body">
                  <div class="form-group">
                    <!-- Opciones de concepto de compra-->  
                    <label for="usuario" style="color:green" class="font-weight-bold form-label">Ingrese el concepto de venta: </label>
                    <input type="text" id="usuario" name="usuario" placeholder="Escriba para buscar..." class="form-control form-control-user" list='listaDatos' required>
                    <datalist id="listaDatos">
                      <option value="Medallón de Merluza">
                      <option value="Medallón de Merluza con Jamón y Queso">
                        <option value="Filet de Merluza">
                        <option value="Filet de Merluza a las finas hierbas">
                        </datalist>
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="clave" style="color:green" class="font-weight-bold">Ingrese el importe:    </label>
                    <input type="text" id="clave" name="clave" placehoslder="Escriba la clave" class="form-control form-control-user" required>
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="usuario" style="color:green" class="font-weight-bold">Notas: </label>
                    <input type="text" id="rol" name="rol" placehoslder="Escriba el perfil" class="form-control form-control-user" required>
                  </div>
                  <br>
                  
                </div> 

  
                <!-- Footer -->
                <div class="box-footer">
                  <br>
                  <button type="submit" class="btn btn-primary container-fluid">Cargar registro</button>
                  <br><br>
                  <div class="col-4 mx-auto">
                    <a href="index.php" class="btn btn-lg btn-success container-fluid">Salir</a>
                  </div>
                  <div class="col-4"></div>

                  <!-- Mensaje al usuario -->
                  <?php echo $mensaje; ?>                  
                </div>
              </form>
            </div>
          </div>
      </section>


  </body>
</html>