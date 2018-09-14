<?php
$id_sitv=$_POST["id_sitv"];
$cone= mysqli_connect("localhost", "root", "", "misperris");
$reg= mysqli_query($cone, "select * from vacunas "
                    . "where sit_vac_id=$id_sitv");
?>

<option value="0">Seleccione</option>
<?php
while ($row = mysqli_fetch_array($reg)){
    echo '<option value="'.$row[0].'">'.$row[1].'</option>';
}
?>
