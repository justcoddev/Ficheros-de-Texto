<?php include("template/header.php");?>
   
<div class="col-md-3">
  <div class="card">
    <img class="card-img-top" src="holder.js/100x180/" alt=""> 
    <div class="card-body">
      <h4 class="card-title">Ficheros Existentes</h4>
      <p class="card-text">Text</p>





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
      <form action ="<?php $_SERVER['PHP_SELF'];?>" method="post" >
      <input type="submit" name="leer" value="Leer">
    </form>
  
    <?php
    if(isset($_POST['leer'])){
      $archivo = fopen("modos\datos.txt", "r");
      while(!feof($archivo)){
        $lineas=fgets($archivo);
        echo $lineas;
      }
    }
    ?>
<!-- <a name="leer" id="" class="btn btn-primary" href="#" role="button">leer</a> -->
      </div>
  </div>
</div>
<div class="col-md-3">
  <div class="card">
    <img class="card-img-top" src="holder.js/100x180/" alt=""> 
    <div class="card-body">
      <h4 class="card-title">Modo de Escritura</h4>
      <p class="card-text">"a" -> agregar</p>
 <form action ="<?php $_SERVER['PHP_SELF'];?>" method="post" >
      <input type="submit" name="escribir" value="Escribir">
    </form>
  
    <?php
    if(isset($_POST['escribir'])){
      $archivo = fopen("modos\datos.txt", "a");
      while(!feof($archivo)){
        $lineas=fgets($archivo);
        echo $lineas;
      }
    }
    ?>



    </div>
  </div>
</div>
<div class="col-md-3">
  <div class="card">
    <img class="card-img-top" src="holder.js/100x180/" alt=""> 
    <div class="card-body">
      <h4 class="card-title">Title</h4>
      <p class="card-text">Text</p>
    </div>
  </div>
</div>
<?php include("template/footer.php");?>