<?php

 class Producto {
    // Productos
    public string $nombre;
    public int $precio;
    public bool $disponible;

    // Metodo Constructor 
    public function __construct($nombre, $precio, $disponible ){

        // valore a atributos
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
    }
    
    // Definir Metodo
    public function MostrarProducto(){
        echo "El producto es: <b>".$this->nombre."</b> y su precio es de: <b>".$this->precio;
    }
 }