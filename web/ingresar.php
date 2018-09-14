<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilos.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body class="colorfondo2">
        <script src="js/jquery-3.3.1.min.js"></script>
        <script>
            $(document).ready(function(event){
                $("#cboSitVac").change(function(){
                    var id_sitv=$("#cboSitVac").val();
//                    alert('cambio'+id_sitv);
                    $.ajax({
                        url: "llenar_vacunas.php",
                        type: 'POST',
                        data: {id_sitv:id_sitv},
                        success: function(data){
                            $("#cboVacunas").html(data);
                        }
                    })
                });
            });
        </script>
        <?php include_once './menu.php';?>
        <?php
        $cone= mysqli_connect("localhost", "root", "", "misperris");
        $reg= mysqli_query($cone, "select * from sit_vac");
        ?>        
        <form method="POST" action="grabar_perro.php">
            <table border="0" class="table">
                <thead class="thead-dark">    
                    <tr>
                        <th colspan="2"> Ingreso de Mascotas </th>                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ID:</td>
                        <td>
                                <input type="text" name="txtId" value="" /> 
                        </td>
                    </tr>
                    <tr>
                        <td>Nombre:</td>
                        <td>
                            <input type="text" name="txtNombre" value="" />
                            
                        </td>
                    </tr>
                    <tr>
                        <td>Raza:</td>
                        <td>
                            <input type="text" name="txtRaza" value="" />
                        </td>
                    </tr>
                    <tr>
                    
                        <td>Edad:</td>
                        <td>
                            <input type="number" min="0" max="200" 
                                   name="txtEdad" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>Situacion Vacuna:</td>
                        <td>
                            <select name="cboSitVac" id="cboSitVac">
                                <?php
                                while ($row = mysqli_fetch_array($reg)){
                                    echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                                    
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Vacunas:</td>
                        <td>
                            <select type="text" name="cboVacunas" id="cboVacunas" value=""></select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" value="Enviar" class="btn btn-primary">Enviar</button>
                            <button type="reset" value="Limpiar" class="btn btn-danger">Limpiar</button>                                      
                        </td>                        
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>
