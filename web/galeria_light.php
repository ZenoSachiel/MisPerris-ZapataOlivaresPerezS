<!DOCTYPE html>
<html lang="en">
     <?php include_once './menu.php';?>
    <head>
        <title>Perritos Rescatados</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/lightgallery/1.3.9/css/lightgallery.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/galeria_light.js"></script>
        <link rel="stylesheet" href="css/estilos_light.css">
        <style>body{background-color:#152836}h2{color:#fff;margin-bottom:40px;text-align:center;font-weight:100;}</style>
        
   
    </head>
    
    <body class="home">
        <div class="container" style="margin-top:40px;">
            <h2>Perritos </h2>
            <div class="demo-gallery">
                <ul id="lightgallery" class="list-unstyled row">
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="img/Chocolate.jpg" data-src="img/Chocolate.jpg" data-sub-html="<h4>Chocolate</h4><p>Chocolate es un perro muy amigable y jugueton que busca una familia que lo quiera mucho...</p>">
                        <a href="">
                            <img class="img-responsive" src="img/Chocolate.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="img/Bigotes.jpg" data-src="img/Bigotes.jpg" data-sub-html="<h4>Bigotes</h4><p>El tranquilo, inteligente y educado bigotes busca un hogar que lo quiera mucho...</p>">
                        <a href="">
                            <img class="img-responsive" src="img/Bigotes.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="img/Luna.jpg" data-src="img/Luna.jpg" data-sub-html="<h4>Luna</h4><p>Luna es una perrita muy tierna en busca de una familia...</p>">
                        <a href="">
                            <img class="img-responsive" src="img/Luna.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="img/Maya.jpg" data-src="img/Maya.jpg" data-sub-html="<h4>Maya</h4><p>Maya es una perrita muy hiperactiva en busca de mucho amor...</p>">
                        <a href="">
                            <img class="img-responsive" src="img/Maya.jpg">
                        </a>
                    </li>
    				<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="img/Oso.jpg" data-src="img/Oso.jpg" data-sub-html="<h4>Oso</h4><p>Oso es un perro muy regalón y juguetón en busca de aventuras...</p>">
                        <a href="">
                            <img class="img-responsive" src="img/Oso.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="img/Pexel.jpg" data-src="img/Pexel.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                        <a href="">
                            <img class="img-responsive" src="img/Pexel.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="img/Wifi.jpg" data-src="img/Wifi.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                        <a href="">
                            <img class="img-responsive" src="img/Wifi.jpg">
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $('#lightgallery').lightGallery(); 
            });
        </script>
    </body>    
</html>