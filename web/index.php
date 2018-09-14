<?php
session_start();
if (!isset($_SESSION["sesion"])){
    header("Location:login.php");
}else{
    $usuario=$_SESSION["sesion"];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Mis Perris Web</title>
</head>
<?php
include_once './menu.php';
?>
<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <br>
    <br>
    <br>
    <section>
        <div>
            <center>
            
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block w-50" src="img/Apolo1.jpg" alt="First slide" >
        <div class="carousel-caption d-none d-md-block">
       <h1>Apolo</h1>
       <h3>"Nuestros compañero de viajes"</h3>
  </div>
    </div>
    <div class="carousel-item">
        <img class="d-block w-50" src="img/Duque1.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
       <h1>Duque</h1>
       <h3>"La mejor raza es rescatade"</h3>
  </div>
    </div>
    <div class="carousel-item">
        <img class="d-block w-50" src="img/Tom1.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
       <h1>Tom</h1>
       <h3>"No es mi mascota, es mi familia"</h3>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                
                
            </center>
        </div>
    </section>
    <br>
    <br>
    <br>
    <div id="contenedort1" >
            <div id="izquierda"><b>+56 9 98765431</b></div>
            <div id="centro"><b>Rescate y adopcion de perros callejeros</b> </div>
            <div id="derecha">
                <img src="img/socialfacebook.png" class="icons">
                <img src="img/socialplus.png" class="icons">
                <img src="img/social-inst.png" class="icons">
                <img src="img/social-twitter.png" class="icons">
            </div>
    </div>
    <br>
    <br>
    <br>
    <section class="colorfondo2">
        <br>
        <br>
        <br>
        <center>
        <div id="contenedor2">
            <div class="C">
                    <h1>RESCATE</h1>
                <article>
                        <p>ETAPA UNO</p>
                        <br>
                        <hr class="hr1">
                        <br>
                        <samp>Rescatamos a los perros en situación de peligro y/o abandono. Los rehabilitamos y los<br>
                            preparamos para buscarles un hogar.
                            <br>
                            <br>
                            <br>
                            <img src="img/rescate.jpg" class="imagena">
                        </samp>
                </article>
            </div>
            <div class="D">
                <img src="img/crowfunding.jpg" class="imagenb">
                <h1>CROWFUNDING</h1>
                <article>
                    <p>FINANCIAMIENTO</p>
                    <br>
                        <hr class="hr2">
                    <br>
                    <samp>
                            Sigue nuestras redes sociales para informarte acerca de las diversas campañas y <br>
                            actividades que realizamos para obtener financiamiento para seguir ayudando.
                    <br>
                    <br>
                    <input type="button" value="CAMPAÑAS" class="boton">
                    </samp>
                </article>
            </div>
        </div>
        </center>
        <br>
        <br>
        <br>
    </section>
    <footer>
        <br>
        <br>
        <i>Desarrollo Web y Mobile</i> 
        <center>Design By: &copy; Cristobal Zapata - &copy; Matías Pérez - &copy; Alonso Olivares</center>
         <br> 
         <audio controls>
             <source src="mp3/Who let the dog out!.mp3" type="audio/ogg" />
             <source src="mp3/Who let the dog out!.mp3" type="audio/mpeg" />
             <a href="mp3/Who let the dog out!.mp3">Who let the dog out?!</a>
                </audio>
    </footer>
</body>
</html>