<?php include("template/header.php");?>

<div class="col-xs-2">
  <div class="card">
    <img class="card-img-top" src="holder.js/100x180/" alt="">
    <div class="card-body">
      <h4 class="card-title">Ficheros Existentes</h4>
      <p class="card-text">Text</p>

      <?php
// buenas praticas-- va arriba
$directorio = 'txt';
$contarchivos = 0;
if($dir = opendir($directorio)){
  while($archivostxt = readdir($dir)){
    if($archivostxt != '.' && $archivostxt != ".."){
      $contarchivos++;
      echo "Archivo txt: <strong>$archivostxt</strong><br>";
    }

  }
  echo "Total archivos: <strong>$contarchivos</strong> <br>";
}
    ?>
      <a name="" id="" class="btn btn-primary" href="#" role="button">Mostar</a>
    </div>
  </div>
</div>
<!-- rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr -->
<div class="col-md-3">
  <div class="card">
    <img class="card-img-top" src="holder.js/100x180/" alt="">
    <div class="card-body">
      <h4 class="card-title">Modo de Lectura</h4>
      <p class="card-text">"r"-> read</p>
      <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <input type="submit" name="leer" value="Leer">
      </form>
      <?php
    if(isset($_POST['leer'])){
      $archivo = fopen("txt\datos.txt", "r");
      while(!feof($archivo)){
              $lineas=fgets($archivo);
           // echo $lineas."<br>";
        echo "$lineas<br/>";
      }
      fclose($archivo);
    }
    ?>
    </div>
  </div>
</div>
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
<div class="col-md-3">
  <div class="card">
    <img class="card-img-top" src="holder.js/100x180/" alt="">
    <div class="card-body">
      <h4 class="card-title">Modo de Agregar</h4>
      <p class="card-text">"a" -> agregar</p>
      <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <textarea name="nueva_linea" id="" cols="30" rows="5"></textarea>
        <input type="submit" name="agregar" value="Agregar">
      </form>
      <?php
       if(isset($_POST['agregar'])){
      $nueva_linea =$_POST['nueva_linea'];
          $archivo = fopen("txt\datos.txt", "a");
      fwrite($archivo, "\n$nueva_linea");
      fclose($archivo);
    }
    ?>
    </div>
  </div>
</div>

<!-- wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww -->

<div class="col-md-3">
  <div class="card">
    <img class="card-img-top" src="holder.js/100x180/" alt="">
    <div class="card-body">
      <h4 class="card-title">Modo de Escritura</h4>
      <p class="card-text">w-> escritura</p>

      <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <textarea name="nueva_linea" id="" cols="30" rows="5"></textarea>
        <input type="submit" name="escribir" value="Sobreescribir">
      </form>
      <?php
    if(isset($_POST['escribir'])){
      $nueva_linea =$_POST['nueva_linea'];
      $archivo = fopen("txt\datos.txt", "w");
      fwrite($archivo, "\n$nueva_linea");
      fclose($archivo);
    }
    ?>
    </div>
  </div>
</div>


<!-- rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr -->


<div class="col-md-3">
  <div class="card">
    <img class="card-img-top" src="holder.js/100x180/" alt="">
    <div class="card-body">
      <h4 class="card-title">Eliminar Archivo</h4>
      <p class="card-text">unlink</p>

      <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">

        <input type="submit" name="eliminar" value="Eliminar">
      </form>
      <?php
    if(isset($_POST['eliminar'])){
      $archivo = "txt\datos.txt";
      unlink($archivo);
    }
    ?>

    </div>
  </div>
</div>
<?php include("template/footer.php");?>