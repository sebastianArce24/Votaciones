
<!DOCTYPE html>
<html>
<head>

 <title>Formulario</title>
 <link rel="stylesheet" href="style.css" type="text/css">
 <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>

 
</head>
<body>

    <?php

    include("Conexion.php");

    ?>

    <h1 class="title">Formulario de votación:</h1>
    <br>
    <form name="frmVoto" id="frmVoto" method="post">
    <!--nombre y apellido no debe estar en blanco-->
   
    <label class="text-center">Nombre y Apellido</label>
    <input type="text" name="nombre" id="nombre" class="nombre" required="">
    </div>
  
    <br>
    <!--Alias mayor a 5-->
    <label class="text-center">Alias</label>
    <input type="text" name="alias" id="alias" minlength="5" class="alias" required="">
    <br>
     <!--Rut chileno-->
     <label class="text-center">RUT</label>
    <input type="text" name="rut" id="rut" class="rut" required="">
    <br>
     <!--Email validar formato-->
     <label class="text-center">Email</label>
    <input type="email" name="email" id="email" class="email" required="">
    <br>
    <!--Seleccionar region-->
    <label class="text-center">Region</label>
    <select name="select" id="lista1" class="region">
     <option value="0">Seleccione:</option>
     <?php
          $query = $con -> query ("SELECT * FROM region");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores["id_region"].'">'.$valores["nombre"].'</option>';
          }
        ?>
    </select>
    <br>
      <!--seleccionar comuna-->
    <div id ="select2lista" class="text-center"></div>

      <!--Email validar formato-->
      <label class="text-center">Candidato</label>
    <select name="select2" class="candidato">
    <option value="0">Seleccione:</option>
    <?php
          $query = $con -> query ("SELECT * FROM candidatos");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores["id_candidatos"].'">'.$valores["nombre"].'</option>';
          }
        ?>
    </select>
    <br>
    <div id="form1">
        <label class="text-center">Como se entero de nosotros
        <label>
            <input type="checkbox" name="web"  value="web" onchange="validacion('form1', this)"> Web
        </label>
        <label>
            <input type="checkbox" name="TV"  value="TV" onchange="validacion('form1', this)" > TV
        </label>
        <label>
            <input type="checkbox" name="redes"  value="redes" onchange="validacion('form1', this)"> Redes Sociales
        </label>
        <label>
            <input type="checkbox" name="amigo"  value="amigo" onchange="validacion('form1', this)"> Amigo
        </label>
        </label>
      </div>
    <div >
        <br>
    <button type="submit" name="votar" class="boton" hidden="True" id="btnVotar">Votar</button>
    <p class="error" id="msgerror"></p>
    </div>
</form>

<?php
include ("Votos.php");
?>
</body>
<script type="text/javascript" src="rut.js"></script>

</html>

<script type="text/javascript">
    $(document).ready(function(){
    recargarLista();

    $('#lista1').change(function(){

    recargarLista();   
});
})
</script>

<script type="text/javascript">

function recargarLista(){
$.ajax({
type:"POST",
url:"comunas.php",
data:"id_region=" + $('#lista1').val(),
success:function(r){
    $('#select2lista').html(r);

}
});

function mostrar(){

  document.getElementById("#btnVotar").style.visibility = "visible";
}

}

</script>

<script type="text/javascript">
function validacion(formu, obj) {

  

}

</script>

