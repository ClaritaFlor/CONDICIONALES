<?php
$valor=7;
switch($valor)
{
case ($valor < 5):
echo "Nota muy baja";
break;

case (($valor >= 6) && ($valor <= 9)):
echo "Buena nota";
break;

case ($valor = 10):
echo "Excelente nota";
break;
}
?>