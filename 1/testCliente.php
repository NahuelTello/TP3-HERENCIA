<?php
require_once ('Cliente.php');
function test_crearCliente(){
    $objCliente = new Cliente("123456", "Nahuel", "Tello", "1");
    echo $objCliente;
}

function main(){
    test_crearCliente();
}

main();