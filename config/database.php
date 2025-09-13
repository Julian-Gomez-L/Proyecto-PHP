<?php

//clase database para conectar la base de datos en este caso bdatos
class database{
    public static function conectar(){
            $conexion = new mysqli("localhost","root","","tienda2"); //mysqli es para indicar que se usa mysql="servidor","usuario","","basede datos"
            $conexion->query("SET NAMES 'utf-8'"); //realizar la conexion (uf-8 es el idioma que aceptara) 
    }
}