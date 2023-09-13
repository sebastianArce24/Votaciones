
<?php

include("Conexion.php");

$region = $_POST['id_region'];

$sql = "SELECT id_comuna,nombre From comunas
        WHERE id_region = '$region' " ;

$result = mysqli_query($con,$sql);
$cadena="<label>Comuna</label>
         <select id='lista2'class='comuna' name='lista2'>";

         while($ver=mysqli_fetch_row($result)){
          $cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';

         }

         echo $cadena."</select> ";
?>
