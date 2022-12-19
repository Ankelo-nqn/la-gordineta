<?php

  echo 'movimientos_sql.php';

  include 'include/error.php';
  error();
  include 'include/conexion.php';

  $p_concepto = $_POST['concepto'];
  $p_importe = $_POST['importe'];
  $p_obs = $_POST['obs'];
  $p_movim = $_POST['movim'];

  echo $p_concepto;
  echo $p_importe;
  echo $p_obs;

  // $p_usuario = $_POST['usuario'];
  // $p_clave = $_POST['clave'];
  // $p_rol = $_POST['rol'];
  // $p_nombre = $_POST['nombre'];
  // $p_apellido = $_POST['apellido'];
  // $p_correo = $_POST['correo'];

  // $consulta1 = "select count(distinct usuario) as nuevo from usuario where usuario = '$p_usuario' ";

  $ultimo_id = "select max(id) as nuevo from gordineta";

  // $resultado1 = mysqli_query($conexion,$consulta1);
  
  
  // averiguar el último id (autoincremental) y sumarle 1 para obtener usuario

  // $rs = mysql_query("SELECT MAX(id_tabla) AS id FROM tabla");
  // if ($row = mysql_fetch_row($rs)) {
  // $id = trim($row[0]);
  // }  
  

  $id = mysqli_query($conexion,$ultimo_id);


  // a = ... será 0 o 1, reconocido como true o false
  // while($a = mysqli_fetch_assoc($resultado1)){
  //   echo $a['nuevo'];
  //   $existe = $a['nuevo']; // el índice nuevo se asigna en el select de la consulta
  // };

  while($a = mysqli_fetch_assoc($id)){
    echo $a['nuevo'];
    $existe = $a['nuevo']; // el índice nuevo se asigna en el select de la consulta
  };
  

  // if($existe==1){
  //   header("Location:compras.php?mensaje=uno");
  // }else{
  //   // el usuario a cargar no existe, le permito agregarlo
  //   echo 'else';
  //   echo $_usuario, $p_clave, $p_rol;
  //   $alta = "insert into usuario values('$p_usuario','$p_clave','$p_rol')";
  //   $resultado_alta = mysqli_query($conexion,$alta);
  //   // header("Location: abm.php?mensaje=alta ingresada correctamente");
  //   header("location: index.php?mensaje=alta ingresdacorrectamente");
  // };

  
  // las altas deben ser todas ingresadas, repetidas o no
  // $fecha='2022-12-19';
  // $signo=1;

  if($p_movim=='egreso'){
    $signo= -1;
  }else{
    $signo= 1;
  }

  echo $signo;

  $alta = "insert into gordineta (concepto, importe, signo, obs) values('$p_concepto','$p_importe','$signo','$p_obs')";
  $resultado_alta = mysqli_query($conexion,$alta);
  header("location: index.php?mensaje=alta ingresada correctamente");

?>