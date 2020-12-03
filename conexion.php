<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$base_datos= mysqli_connect("localhost", "root", "", "bdtesis");

//verificar la conexion
if (mysqli_connect_error($base_datos)) {
    echo "Conexion fallida".mysqli_connect_error();

}

