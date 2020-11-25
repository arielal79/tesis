<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include('conexion.php');


$reparticion=$_POST['reparticion'];
$rubro=$_POST['rubro'];
$iniciador=$_POST['iniciador'];
$fojas=$_POST['fojas'];
$concepto=$_POST['concepto'];


mysqli_query($base_datos, "INSERT INTO expedientes VALUES (0,  '$reparticion', '$rubro', '$iniciador', '$fojas', '$concepto')");
mysqli_close($base_datos);
include('nuevo_exp.php');

