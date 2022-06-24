<?php
require_once 'tipoProducto.php';

class Producto
{
    public $Id;
    public $Nombre;
    public $Precio;
    public $Stock;
    public $TipoProducto;

    public function MostrarDatos()
    {
        echo 'Datos del producto' . '<br>';
        echo 'Id del producto: ' . $this->Id . '<br>';
        echo 'Nombre del producto: ' . $this->Nombre . '<br>';
        echo 'Precio del producto: ' . $this->Precio . '<br>';
        echo 'Stock del producto: ' . $this->Stock . '<br>';
        echo 'Id del tipo de producto: ' . $this->TipoProducto->Id . '<br>';
        echo 'Descripcion del tipo de producto: ' . $this->TipoProducto->Descripcion . '<br>';
    }
}
