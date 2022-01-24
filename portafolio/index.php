<?php  include("cabecera.php");?>
<?php 

$oConexion = new Conexion();
$resultado=$oConexion->consultar("Select * from proyectos");


?>
<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">Bienvenidos</h1>
        <p class="lead">A mi Portafolio</p>
        <hr class="my-2">
    </div>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach($resultado as $proyecto){ ?> 

  <div class="col">
    <div class="card h-100">
      <img src="src/img/<?php echo $proyecto['imagen']; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $proyecto['nombre'];?></h5>
        <p class="card-text"><?php echo $proyecto['descripcion']; ?></p>
      </div>
    </div>
  </div>
  <?php }?>
</div>
<?php  include("pie.php");?>
