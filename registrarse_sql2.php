<?php

include 'include/error.php';
error();

   // este archivo no tiene contacto con el usuario

  // conexión al servidor
  include('include/conexion.php');
  
  // Buscar los datos enviados al servidor
  // p_ -> vino por POST
  
  $p_usuario = $_POST['usuario'];
  $p_clave = $_POST['clave'];
  $p_rol = $_POST['rol'];
  $p_nombre = $_POST['nombre'];
  $p_apellido = $_POST['apellido'];
  $p_correo = $_POST['correo'];


  // usuario primary key, esta o no esta cargado, 0 ó 1
  // verifico si el usuario existe
  // conexion con bd tp1 en localhost

  $consulta1 = "select count(distinct usuario) as nuevo from usuario where usuario = '$p_usuario' ";

  $resultado1 = mysqli_query($conexion,$consulta1);

  // a = ... será 0 o 1, reconocido como true o false
  while($a = mysqli_fetch_assoc($resultado1)){
    echo $a['nuevo'];
    $existe = $a['nuevo']; // el índice nuevo se asigna en el select de la consulta
  };

  // punto de control
  // echo $existe;
  // redirecciono. destino.php?variable=valor
  // modifico el mensaje y vuelvo al formulario

  if($existe==1){
    header("Location:registrarse.php?mensaje=uno");
  }else{
    // el usuario a cargar no existe, le permito agregarlo
    echo 'else';
    echo $_usuario, $p_clave, $p_rol;
    $alta = "insert into usuario values('$p_usuario','$p_clave','$p_rol')";
    $resultado_alta = mysqli_query($conexion,$alta);
    header("Location: abm.php?mensaje=alta ingresada correctamente");
    // header("location: index.php?mensaje=alta ingresdacorrectamente");
  };
?>