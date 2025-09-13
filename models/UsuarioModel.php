<?php

require_once 'config/database.php'; //sirve para no volver a escribir el mismo codigo para realiar una funcion, ejemplo function saliuda(hola) despues saluda()

class Usuario{
    
    public $db;

    public function __construct(){
        $this->db = database::conectar();
    }

    public $id_usuario;
    public $nombre;
    public $apellido;
    public $email;
    public $password;
    public $rol;
    public $imagen;

    function getId_usuario(){
        return $this->id_usuario;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getApellido(){
        return $this->apellido;
    }

    function getEmail(){
        return $this->email;
    }

    function getPassword(){
        return $this->password;
    }

    function getRol(){
        return $this->rol;
    }

    function getImagen(){
        return $this->imagen;
    }

    function setId_usuario(){
        $this->id_usuario = $id_usuario; 
    }

    function setNombre(){
        $this->nombre = $nombre;
    }

    function setApellido(){
        $this->apellido = $apellido;
    }

    function setEmail(){
        $this->email = $email;
    }

    function setPassword(){
        $this->password = $password;
    }

    function setRol(){
        $this->rol = $rol;
    }

    function setImagen(){
        $this->imagen = $imagen;
    }
}