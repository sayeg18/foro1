<?php
include "cone.php";
?>
<!doctype html>
    <head>
        <!-- Required meta tags --> 
        <meta charset="utf-8"> 
        <meta name="viewport" content=
              "width=device-width, initial-scale=1, 
              shrink-to-fit=no">
        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href=
              "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
              integrity=
              "sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
              crossorigin="anonymous">  
    <title>Formulario de registro</title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container my-4 ">
            <h1 class="text-center">Registrate aqui</h1> 
            <form action="home.php" method="POST">
                <div class="form-group"> 
                    <label for="username">Usuario</label> 
                    <input type="text" class="form-control" id="username"
                           name="usuario" aria-describedby="emailHelp">    
                </div>
                <div class="form-group"> 
                    <label for="password">Contraseña</label> 
                    <input type="password" class="form-control"
                           id="password" name="password"> 
                </div>
                <div class="form-group"> 
                    <label for="cpassword">Confirma Contraseña</label> 
                    <input type="password" class="form-control"
                           id="cpassword" name="cpassword">

                    <small id="emailHelp" class="form-text text-muted">
                        Asegúrate de escribir la misma contraseña
                    </small> 
                </div>      
                <button type="submit" class="btn btn-primary"><a href="home.php"></a>
                    Registrate
                </button> 
            </form> 
        </div>
        <!-- Optional JavaScript --> 
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="
                https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="
                sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous">
        </script>
        <script src="
                https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity=
                "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
                crossorigin="anonymous">
        </script>
        <script src="
                https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
                integrity=
                "sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
                crossorigin="anonymous">
        </script> 
    </body> 
</html>
