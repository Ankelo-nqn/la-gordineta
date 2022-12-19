<?php 

   // Paso 1: datos de conexión
   $usuario = 'root';
   $clave = '';
   $sevidor = 'localhost';
   // $basededatos = 'tp1';
   $basededatos = 'gordineta';
   
   // Paso 2: Creamos la conexión
   // clase nativa PHP trabajo seguro ..
   // or die version vieja

   $conexion = mysqli_connect($sevidor, $usuario, $clave);

   // Paso 3: Conectamos con la base de datos

   $db = mysqli_select_db($conexion,$basededatos);
   // mysqli_set_charset($conexion,'utf-8');

?>