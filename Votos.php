<?php

include("Conexion.php");

if (isset($_POST["votar"])){

 
$nombre = $_POST['nombre'];
$alias = $_POST['alias'];
$rut = $_POST['rut'];
$email = $_POST['email'];
$region = $_POST["select"];
$comuna = $_POST["lista2"];
$candidato = $_POST["select2"];


$consulta = "INSERT INTO votos(nombre,alias,rut,email,region,comuna,candidato)VALUES('$nombre','$alias','$rut','$email',$region,$comuna,$candidato)";
$resultado = mysqli_query($con,$consulta);
if($resultado){

  ?>
  <h3>Se ha emitido correctamente tu voto</h3>

  <?php
}else{
    ?>

   <h3>problema al emitir tu voto</h3>

    <?php


}}



?>  