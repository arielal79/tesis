<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include('conexion.php');
$reparticion=$_POST['reparticion'];
$descripcion=$_POST['descripcion'];





mysqli_query($base_datos, "INSERT INTO reparticion VALUES (0 ,'$reparticion', '$descripcion')");

//cerrar conexion
mysqli_close($base_datos);
include('nueva_repart.php');