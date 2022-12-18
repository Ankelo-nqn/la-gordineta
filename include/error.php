<?php

  function error(){
    // https://hostingwebcloud.com/como-mostrar-errores-php/

   ini_set('display_errors', 1);
   ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);
  }
   

?>