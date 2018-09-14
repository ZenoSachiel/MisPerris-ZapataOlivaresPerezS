<?php
$id_reg=$_POST["id_reg"];
$cone= mysqli_connect("localhost", "root", "", "misperris");
$reg= mysqli_query($cone, "select * from ciudades "
                    . "where regiones_id_reg=$id_reg");
?>

<option value="0">Seleccione</option>
<?php
while ($row = mysqli_fetch_array($reg)){
    echo '<option value="'.$row[0].'">'.utf8_encode($row[1]).'</option>';
}
?>
