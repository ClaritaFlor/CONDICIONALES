<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php
  $usuario = "Admin";
 
  if($usuario == "Admin"){
 
    echo "Bienvenido a la parte de administracición";
 
  }elseif ($usuario == "Invitado"){
 
    echo "Bienvenido a la pagina de Invitados";
 
 }else{
 
    echo "Bienvenido a la pagina de usuarios";
}
?>