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

 

  $ultimo_id = "select max(id) as nuevo from gordineta";

  

  $id = mysqli_query($conexion,$ultimo_id);


 

  while($a = mysqli_fetch_assoc($id)){
    echo $a['nuevo'];
    $existe = $a['nuevo']; // el índice nuevo se asigna en el select de la consulta
  };
  


  if($p_movim=='egreso'){
    $signo= -1;
  }else{
    $signo= 1;
  }

  echo $signo;

  $alta = "insert into gordineta (concepto, importe, signo, obs) 
                        values('$p_concepto','$p_importe','$signo','$p_obs')";
  $resultado_alta = mysqli_query($conexion,$alta);
  header("location: index.php?mensaje=alta ingresada correctamente");

?>