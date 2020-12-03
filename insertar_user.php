<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include('conexion.php');


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cod_user=$_POST['cod_user'];
$user_name=$_POST['user_name'];
$clave=$_POST['clave'];
$clave_conf=$_POST['clave_conf'];




mysqli_query($base_datos, "INSERT INTO usuarios VALUES (0,  '$nombre', '$apellido', '$cod_user', '$user_name', '$clave', '$clave_conf')");
// una vez arregaldo el formulario y agregar el modal habilitar las lineas
//$verificar_usuario = mysqli_query($base_datos, "SELECT * FROM usuarios WHERE user_name = '$user_name'");
//if (mysqli_num_rows($verificar_usuario)> 0){
//    echo "El nombre de usaurio ya esta registrado";
//    include('nuevo_usuario.php');
//}



mysqli_close($base_datos);

include('nuevo_usuario.php');

