<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body class="colorfondo2">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <?php
        include_once './menu.php';
        ?>
        <table class="table">
            <thead class="thead-dark"><th>Lista de Mascotas</th></thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Raza</td>
                <td>Edad</td>
                <td>Vacunas</td>                
                <td>Eliminar</td>
                <td>Modificar</td>
            </tr>
            <?php 
                    include_once '../controlador/DaoPerro.php';
                    $dao= new DaoPerro();
                    $reg=$dao->Listar();
                    $archivo= fopen("listado.csv", "w");
                    fwrite($archivo, "Id;Nombre;Raza;Edad;Vac \n");
                    while ($row = mysqli_fetch_array($reg)) {
                        echo '<tr>';
                        echo '<td>'.$row[0]."</td>";
                        echo '<td>'.$row[1]."</td>";
                        echo '<td>'.$row[2]."</td>";
                        echo '<td>'.$row[3]."</td>";
                        echo '<td>'.$row[4]."</td>";
                        echo '<td><a href="eliminar.php?id='.$row[0].'">Eliminar</a></td>';
                        echo '<td><a href="modificar.php?id='.$row[0].'">Modificar</a></td>';
                        echo '</tr>';
                        fwrite($archivo, $row[0].";".$row[1].";".$row[2].";".$row[3].";".$row[4]." \n");
                    }
                    fclose($archivo);
            ?>
        </table>
        <a href="listado.csv">Exportar Excel</a> / <a href="lista_pdf.php">Exportar PDF</a>
    </body>
</html>
