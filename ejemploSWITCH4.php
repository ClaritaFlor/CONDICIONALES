<?php
$hacer = "AÑADIR";
switch ($hacer){

  case "AÑADIR":
     echo "las tareas a realizar, por ejemplo mostrar con un bucle del 1 al 10";
     for ($i=1; $i<= 10; $i++)
     {
       
       echo $i;

     }
     break;

 case "MODIFICAR":
      echo "Sus tareas"; 
      break;
 case "BORRAR":

      echo "Las tareas a borrar";
      break;
}
?>