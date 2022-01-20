<?php
session_start();
if($_POST){
    if( ($_POST["usuario"]=="mario") && ( $_POST["contraseña"]=="12345") ){
        
        $_SESSION["usuario"]="mario";
        $_SESSION["contraseña"]="123456";

        header("location:index.php");

    }else{
        echo "<script> alert('Usuario o contraseña incorrectos'); </script>";
    }
    
}





?>

<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">

            <div class="card text-center">
                <div class="card-header bg-primary text-white">
                    Iniciar Sesión
                </div>
                <div class="card-body">
                    <form action="login.php" method="post">
                        Usuario : <input class="form-control" type="text" name="usuario" id="">
                        Contraseña : <input class="form-control" type="password" name="contraseña" id="">                
                        <button class="btn mt-2 btn-success" type="submit">Ingresar al portafolio</button>
                    </form>                
                </div>
                <div class="card-footer text-muted bg-primary">
                </div>
            </div>
            </div>
            <div class="col-md-4">
                
            </div>
        </div>
    </div>
  </body>
</html>