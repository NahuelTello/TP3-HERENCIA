<?php
/* <?php
require_once ('Cliente.php');
function test_crearCliente(){
    $objCliente = new Cliente("123456", "Nahuel", "Tello", "1");
    echo $objCliente;
}

function main(){
    test_crearCliente();
}

main(); */
require_once('Cliente.php');
require 'CtaCorriente.php';

function testCrearCliente(){
    $objCliente = new Cliente(123456, "Pepito", "Lopex", 01);
    return $objCliente;
}

function crearCuentaC(){
    $instanciaCliente = testCrearCliente();
    $objCuenta = new CuentaCorriente(12000, $instanciaCliente,100000);
    echo "Saldo de la cuenta: $ {$objCuenta->getMonto()}\nIngrese el monto a depositar: ";
    $deposito = intval(trim(fgets(STDIN)));
    if ($objCuenta->depositar($deposito)) {
        echo "Deposito exitoso!\nSaldo actual ($){$objCuenta->getMonto()}\n";
    } else {
        echo "Hubo un error!\n";
    }
    echo "\nDesear retirar dinero?: ";
    $res = trim(fgets(STDIN));
    if ($res = "si" || "SI") {
        echo "\n(No ingresar un monto inferior al que hay en la cuenta)\nIngrese el monto a retirar: ";
        $extraccion = intval(trim(fgets(STDIN)));
        if ($objCuenta->retiro($extraccion)) {
            echo "Extraccion exitosa!\nSaldo restante ($){$objCuenta->getMonto()}\n";
        } else {
            echo "Hubo un error!\n";
        }
    }
    echo "\nDesea pedir un prestamo? ";
    $res = trim(fgets(STDIN));
    if ($res = "si" || "SI"){
        echo "\n(No ingresar un monto inferior al que hay en el limite)\nIngrese el monto a pedir: ";
        $prestamo = intval(trim(fgets(STDIN)));
        if ($objCuenta->darPrestamo($prestamo)) {
            echo "Prestamo exitoso!\nLimite restante ($){$objCuenta->getMontoMaximo()}\n";
            if ($prestamo == $objCuenta->getMontoMaximo()) {
                echo "¡ADVERTENCIA! ¡HASTA AQUI LLEGO EL LIMITE DEL PRESTAMO!";
            }
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