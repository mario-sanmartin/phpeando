<?php  include("cabecera.php");


$objConexion = new Conexion();

if($_POST){
    
    // print_r($_POST);
    $nombre=$_POST['nombre'];
    $fechaImg= new DateTime('Y-M-D');
    $imagen =$fechaImg->getTimestamp()."_". $_FILES['archivo']['name'];
    $descripcion = $_POST['descripcion'];


    $imagen_temporal=$_FILES['archivo']['tmp_name'];
    move_uploaded_file($imagen_temporal,"imagenes/".$imagen);

    $sql = "insert into proyectos (nombre,imagen,descripcion)	VALUES ('$nombre','$imagen','$descripcion')";
    $objConexion->ejecutar($sql);
}

$resultado=$objConexion->consultar("Select * from proyectos");
// print_r($resultado);

if($_GET){

    $id=$_GET['borrar'];
    $sql="DELETE FROM proyectos WHERE id='$id'";
    $objConexion->ejecutar($sql);
}
?>


<br>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Datos del proyecto
                </div>
                <div class="card-body">
                    <form action="portafolio.php" method="post" enctype="multipart/form-data" >
                    Nombre Proyecto: <input class="form-control" type="text" name="nombre" id="">
                    <br>
                    Imagen Proyecto: <input  class="form-control" type="file" name="archivo" id="">
                    <br>
                    Descripción del Proyecto: <textarea  class="form-control" type="text" name="descripcion" id="">
                    </textarea>
                    <br>
                    <input class="btn btn-success" type="submit" value="Agregar Proyecto"></input>
                    </form>
                </div>
            </div>            
        </div>
        <div class="col-md-6">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Descripción</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($resultado as $r){ ?>
                    <tr>
                        <td scope="row"><?php echo $r['id']; ?></td>
                        <td><?php echo $r['nombre']; ?></td>
                        <td><?php echo $r['imagen']; ?></td>
                        <td><?php echo $r['descripcion']; ?></td>
                        <td> <a name="" id="" class="btn btn-danger" href="?borrar=<?php echo $r['id']; ?>" role="button">Eliminar</a> </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>            
        </div>    
    </div>
</div>



<?php  include("pie.php");?>
