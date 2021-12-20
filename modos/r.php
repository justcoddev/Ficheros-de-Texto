<?php
// modo para abrir el fichero
  $fichero = fopen("datos.txt", "w");

  fputs($fichero, "Ejemplo 1 \n");
  fputs($fichero, "Ejemplo 2 \n");
  fputs($fichero, "Ejemplo 3 \n");
  fputs($fichero, "Ejemplo 4 \n");
  fputs($fichero, "Ejemplo 5 \n");

  fclose($fichero);
  echo "Ingreso correcto";

?>