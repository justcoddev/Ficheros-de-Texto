<?php include("template/header.php");?>

<div class="col-md-3">
  <div class="card">
    <img class="card-img-top" src="holder.js/100x180/" alt=""> 
    <div class="card-body">
      <h4 class="card-title">Ficheros Existentes</h4>
      <p class="card-text">Text</p>

      <?php
      $directorio ='ficheros';
      if($dir = opendir($directorio)){
        while($fichero = readdir($dir)){
          if($fichero != '.' && $archivo != '..'){
            echo "Archivo: <strong>$fichero</strong>";
            
          }
        }

      }
      
      ?>





      <a name="" id="" class="btn btn-primary" href="#" role="button">leer</a>
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
<div class="col-md-3">
  <div class="card">
    <img class="card-img-top" src="holder.js/100x180/" alt=""> 
    <div class="card-body">
      <h4 class="card-title">Title</h4>
      <p class="card-text">Text</p>
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