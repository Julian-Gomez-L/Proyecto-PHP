<?php //modelo es el que conecta con la base de datos

require_once 'config/database.php'; //sirve para no volver a escribir el mismo codigo para realiar una funcion, ejemplo function saliuda(hola) despues saluda()

class Producto{
    
    public $db;

    public function __construct(){
        $this->db = database::conectar();
    }

    public $id_producto;
    public $producto;
    public $descripcion;
    public $precio;

    function getId_producto(){
        return $this->id_producto;
    }

    function getProducto(){
        return $this->producto;
    }

    function getDescripcion(){
        return $this->descripcion;
    }

    function getPrecio(){
        return $this->precio;
    }

    function setId_producto(){
        $this->id_producto = $id_producto; 
    }

    function setProducto(){
        $this->producto = $producto;
    }

    function setDescripcion(){
        $this->descripcion = $descripcion;
    }

    function setPrecio(){
        $this->precio = $precio;
    }
        //ficticio pero que funciones para mostrar usuarios
        public function conseguirTodos(){
        echo "IMPRIMIENDO TODOS LOS USUARIOS ACTIVOS...";
    }

    public function crear (){
        echo "views/usuario/crear.php";
    }

}



