<!DOCTYPE html>

<html class="fondoimagen">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../web/css/estilos.css">
    </head>
    <body class="fondoimagen">
        <script>
            $(document).ready(function(event){
                
                $("#btnLogin").click(function(){
                    $.ajax({
                        url: "acceso.php",
                        type: 'POST',
                        data: $("#formulario").serialize(),
                        success: function (data){
                            if (data=="OK"){
                                    window.location = "index.php"
                                } else {
                                    alert(data);
                                }
                            }
                        });
                    });
                });
        </script>
        <div align="center" class="login-page">
            <div class="form">
                    <form id="formulario" method="post">
                        <table>
                            <tr>
                                <td colspan="2"><img src="img/Logo_dark.png" class="icon_login"></td>
                            </tr>
                            
                            <tr>
                                <td>
                                    Usuario:
                                </td>                                    

                                <td>
                                    <input type="text" id="txtUsuario" minlength="2"
                                           name="txtUsuario"
                                           requeried="true" placeholder="Ingrese Usuario"/>
                                </td>                        
                            </tr>
                            <tr>
                                <td>Contraseña:</td>
                                <td>
                                    <input type="password" id="txtPass" minlength="2"
                                           name="txtPass"
                                           required="true"/>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    
                                    <input type="button" class="btn btn-success" value="Login" id="btnLogin"
                                </td>         

                            </tr>                  

                        </table>                    
                    </form>
            </div>
        </div>
    </body>
</html>
