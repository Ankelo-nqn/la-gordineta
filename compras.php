<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compras</title>
  <?php
    include 'include/cargabootstrap.php';
    include 'include/menu.php';
    include 'include/error.php';
    error();
    cargabootstrap();
    menu();
    $mensaje = 'Estamos registrando una compra';
  ?>  
</head>
<!-- compras.php y ventas.php son copia de registrarse.php recortado y adaptado-->
<body>
  <!-- Cabecera -->
  <br><br>
  <h1 class="text-center">La Gordineta Neuquina</h1>
  <h2 class="text-center">Compras</h2>
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
              <h3 class="box-title">Dar alta compras</h3>
            </div>
            <form action="registrarse_compras_sql.php" method="POST" class="user">
              <div class="box-body">
                <div class="form-group">
                  <!-- Opciones de concepto de compra-->  
                  <label for="usuario" style="color:green" class="font-weight-bold form-label">Ingrese el concepto de compra: </label>
                  <input type="text" id="usuario" name="usuario" placeholder="Escriba para buscar..." class="form-control form-control-user" list='listaDatos' required>
                  <datalist id="listaDatos">
                    <option value="Mercaderías de reventa">
                    <option value="Combustibles y lubricantes">
                    <option value="Viáticos">
                  </datalist>
                </div>
                <br>
                <div class="form-group">
                  <label for="clave" style="color:green" class="font-weight-bold">Ingrese el importe:    </label>
                  <input type="text" id="clave" name="clave" placeholder="Escriba la clave" class="form-control form-control-user" required>
                </div>
                <br>
                <div class="form-group">
                  <label for="usuario" style="color:green" class="font-weight-bold">Notas: </label>
                  <input type="text" id="rol" name="rol" placeholder="Escriba el perfil" class="form-control form-control-user" required>
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
                
              
              <!-- Mensaje al usuario -->
              <?php echo $mensaje; ?>                  
            </div>
          </form>
        </div>
      </div>
    </section>
    
  </body>
</html>