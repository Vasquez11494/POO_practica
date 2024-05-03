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
        echo "El producto es: <b>".$this->nombre."</b> y su precio es de: <b>".$this->precio."</b>";
    }
 }

//  Instancia
 $producto1 = new Producto('tableta', 200, true);
//  mostrar Producto
$producto1->MostrarProducto();

echo "<pre>";
var_dump($producto1);
echo "</pre>";

// producto 2

$producto2 = new Producto("Monitor Curvo", "300", true);
$producto2->MostrarProducto();

echo "<pre>";
var_dump($producto2);
echo "</pre>";