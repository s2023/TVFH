<?php
class CarritoCompra
{
    private static array $carrito = array();

    public static function limpiarCarrito(): void
    {
        self::$carrito = array();
    }

    public static function agregarAlCarrito(object $item): void
    {
        // TODO: agregar al carrito
    }

    public static function quitarDelCarrito($id): void
    {
        // quitar del carrito
    }
}