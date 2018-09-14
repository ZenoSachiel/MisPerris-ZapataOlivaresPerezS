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
                $("#cboReg").change(function(){
                    var id_reg=$("#cboReg").val();
                    alert('cambio'+id_reg);
                    $.ajax({
                        url: "llenar_ciudad.php",
                        type: 'POST',
                        data: {id_reg:id_reg},
                        success: function(data){
                            $("#cboCiu").html(data);
                        }
                    })
                });
            });
        </script>
        
        <?php
        include_once '../controlador/DaoAdoptante.php';
        $dao=new DaoAdoptante();
        $rut=$_GET["rut"];
        $reg=$dao->Buscar($rut);
        //recupera solo la primera fila
        $fila= mysqli_fetch_row($reg);
        ?>
        
        <?php include_once './menu.php';?>
        <?php
        $cone= mysqli_connect("localhost", "root", "", "misperris");
        $reg= mysqli_query($cone, "select * from regiones");
        ?>        
        <form method="POST" action="modificar_adoptante.php">
            <table border="1" class="table">
                <thead class="thead-dark">    
                    <tr>
                        <th> Ingreso de Adoptantes </th>                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Rut:</td>
                        <td>
                            <input type="text" name="txtRut" required="true" minlength="8" maxlength="9" placeholder="Ingrese rut sin punto ni guion" readonly="readonly" value="<?php echo $fila[0] ?>"/> 
                        </td>
                    </tr>
                    <tr>
                        <td>Nombre:</td>
                        <td>
                            <input type="text" name="txtNombre" required="true" placeholder="Juan Espinoza" value="<?php echo $fila[1] ?>"/>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>Fecha de Nacimiento:</td>
                        <td>
                            <input type="date" name="txtFecn" required="true" max="2001-01-01" placeholder="Ingrese fecha nacimiento" value="<?php echo $fila[2] ?>"/>                                                       
                        </td>
                    </tr>
                    <tr>
                    
                        <td>Email:</td>
                        <td>
                            <input type="email" name="txtEmail" required="true" placeholder="ejemplo@dominio.com"  value="<?php echo $fila[3] ?>"/>
                        </td>
                    </tr>
                    <tr>
                    
                        <td>Telefono:</td>
                        <td>
                            <input type="text" name="txtTel" required="true" minlength="9" maxlength="9" placeholder="987654321" value="<?php echo $fila[4] ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Region:</td>
                        <td>
                            <select name="cboReg" id="cboReg" required="true" value="<?php echo $fila[5] ?>">
                                <?php
                                while ($row = mysqli_fetch_array($reg)){
                                    echo '<option value="'.$row[0].'">'.utf8_encode($row[1]).'</option>';
                                    
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Ciudad:</td>
                        <td>
                            <select type="text" name="cboCiu" id="cboCiu" required="true" value="<?php echo $fila[6] ?>"></select>
                        </td>
                    </tr>
                    <tr>
                        <td>Tipo Vivienda:</td>
                        <td>
                            <select type="text" name="cboTviv" id="cboTviv" required="true" value="<?php echo $fila[7] ?>">
                                <option value="Casa con patio grande">Casa con patio grande</option>
                                <option value="Casa con patio pequeño">Casa con patio pequeño</option> 
                                <option value="Casa sin patio">Casa sin patio</option> 
                                <option value="Departamento">Departamento</option>
                            </select>    
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" value="Enviar" class="btn btn-primary">Enviar</button>
                                                            
                        </td>                        
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>
