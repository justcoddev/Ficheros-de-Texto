<?php

$fichero = fopen("datos.txt", "r");

while(!feof($fichero)){ $ejemplo = fgets($fichero);
echo $ejemplo . "<br/>";
}
fclose($fichero);
echo "Ingreso correcto";

?>