<?php
require_once('Cliente.php');
require 'CtaCorriente.php';

function testCrearCliente(){
    $objCliente = new Cliente(123456, "Pepito", "Lopex", 01);
    return $objCliente;
}

function crearCuentaC(){
    $instanciaCliente = testCrearCliente();
    $limitePrestamo = 100000;
    $saldo = 12000;
    $objCuenta = new CuentaCorriente($saldo, $instanciaCliente, $limitePrestamo);
    echo "Saldo de la cuenta: $ {$objCuenta->getMonto()}\nIngrese el monto a depositar: ";
    $deposito = intval(trim(fgets(STDIN)));
    if ($objCuenta->depositar($deposito)) {
        echo "Deposito exitoso!\nSaldo actual ($){$objCuenta->getMonto()}\n";
    } else {
        echo "Hubo un error!\n";
    }
    echo "\nDesear retirar dinero?: ";
    $res = trim(fgets(STDIN));
    $bool = ($res = "si" || "Si");
    if ($bool) {
        echo "\nIngrese el monto a retirar: ";
        $extraccion = intval(trim(fgets(STDIN)));
        if ($objCuenta->retiro($extraccion)) {
            echo "Extraccion exitosa!\nSaldo restante ($){$objCuenta->getMonto()}\n";
        } else {
            echo "No hay fondos suficientes!\n";
        }
    }
    echo "\nDesea pedir un prestamo? ";
    $res = trim(fgets(STDIN));
    $bool = ($res = "si" || "Si");
    if ($bool){
        echo "\n(LIMITE DE ($) {$objCuenta->getMontoMaximo()})\nIngrese el monto a pedir: ";
        $prestamo = intval(trim(fgets(STDIN)));
        if ($objCuenta->darPrestamo($prestamo)) {
            echo "Prestamo exitoso!\nLimite restante ($){$objCuenta->getMontoMaximo()}\n";
        } else {
            echo "Prestamo no otorgado!\n";
        }
    }
    return $objCuenta;
}



function main(){
    echo crearCuentaC();
}
main();