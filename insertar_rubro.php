<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



include('conexion.php');
$rubro=$_POST['rubro'];
$descripcion=$_POST['descripcion'];





mysqli_query($base_datos, "INSERT INTO rubro VALUES (0 ,'$rubro', '$descripcion')");

//cerrar conexion
mysqli_close($base_datos);
include('nuevo_rubro.php');