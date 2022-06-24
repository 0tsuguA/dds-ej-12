<?php
require_once 'modelo/producto.php';

$TipoProducto = new TipoProducto();
$TipoProducto->Id = 2;
$TipoProducto->Descripcion = 'Galletitas';

$Producto = new Producto();
$Producto->Id = 1;
$Producto->Nombre = 'Merenguitas';
$Producto->Precio = 1000;
$Producto->Stock = 10;
$Producto->TipoProducto = $TipoProducto;

$Producto->MostrarDatos();
