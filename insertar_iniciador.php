<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include('conexion.php');

$iniciador=$_POST['iniciador'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cargo=$_POST['cargo'];
$concepto=$_POST['concepto'];





mysqli_query($base_datos, "INSERT INTO iniciador VALUES (0,  '$iniciador', '$nombre', '$apellido', '$cargo', '$concepto')");
mysqli_close($base_datos);
include('nuevo_iniciador.php');

