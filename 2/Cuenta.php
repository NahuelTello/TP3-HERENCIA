<?php
class Cuenta{
    /* Defina e implemente una clase “Cuenta” que contenga la información de una cuenta de un banco y haga
    referencia a su dueño. Tener en cuenta que las cuentas pueden ser de 2 tipos: Cuenta Corriente o Caja de Ahorro.
    Nota: La Cuenta Corriente se distingue de una Caja de Ahorro porque su dueño puede girar en descubierto. Es
    por ello que la clase Cuenta Corriente debe tener un atributo que determine el monto máximo para girar en
    descubierto.
    Implementar los siguientes métodos en la clase:
        1. saldoCuenta() : retorna el saldo de la cuenta.
        2. realizarDeposito(monto): permite realizar un depósito a la cuenta una cantidad “monto” de dinero.
        3. realizarRetiro(monto): permite realizar un retiro de la cuenta por una cantidad “monto” de dinero. */
    private $monto;
    private $objCliente;


    public function _construct($saldo, $instanciaCliente){
        $this->monto = $saldo;
        $this->objCliente = $instanciaCliente;
    //Creado por nahue
    }

    /**
     * Get the value of monto
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set the value of monto
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;
    }

    /**
     * Get the value of objDuenio
     */
    public function getObjCliente()
    {
        return $this->objCliente;
    }

    /**
     * Set the value of objDuenio
     */
    public function setObjCliente($objCliente)
    {
        $this->objCliente = $objCliente;
    }


    public function __toString(){
        $str = "{$this->getObjCliente()->__toString()}\nSaldo $ {$this->getMonto()}";
        return $str;
    //Creado por nahue
    }

    /**
     * Ingresa un monto y se lo agrega a la cuenta
     * @param float $monto
     * @return boolean
     */
    public function depositar($monto){
        $saldoActual = $this->getMonto();
        $nuevoSaldo = $saldoActual + $monto;
        $this->setMonto($nuevoSaldo);
        $validate = true;
        return $validate;
    //Creado por nahue
    }

    /**
     * Ingresa un monto y lo extrae de la cuenta
     * @param float $monto
     * @return boolean
     */
    public function retiro($monto)
    {
        $saldoActual = $this->getMonto();
        if ($monto <= $saldoActual) {
            $saldoRestante = $saldoActual - $monto;
            $this->setMonto($saldoRestante);
            $validate = true;
        } else {
            $validate = false;
        }
        return $validate;
        //Creado por nahue
    }
}