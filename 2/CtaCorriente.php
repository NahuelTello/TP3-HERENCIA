<?php
require_once('Cuenta.php');
class CuentaCorriente extends Cuenta{
    private $montoMaximo;

    public function __construct($ccMonto, $ccInstanciaCliente, $ccMontoMax){
        parent::_construct($ccMonto, $ccInstanciaCliente);
        $this->montoMaximo = $ccMontoMax;
    //Creado por nahue
    }
    

    /**
     * Get the value of montoMaximo
     */
    public function getMontoMaximo()
    {
        return $this->montoMaximo;
    }

    /**
     * Set the value of montoMaximo
     */
    public function setMontoMaximo($montoMaximo)
    {
        $this->montoMaximo = $montoMaximo;
    }

    public function __toString(){
        $cliente = parent::__toString();
        //$saldoEnCta = parent::getMonto();
        $details = "----- Cuenta Corriente Cliente -----\n{$cliente}\n----- Prestamo -----\nLimite: $ {$this->getMontoMaximo()}";
        return $details;
    }        

    /* La Cuenta Corriente se distingue de una Caja de Ahorro porque su dueño puede girar en descubierto. Es
    por ello que la clase Cuenta Corriente debe tener un atributo que determine el monto máximo para girar en
    descubierto. */

    public function darPrestamo($monto){
        $saldoEnCta = parent::getMonto();
        $validate = false;
        if ($saldoEnCta == 0) {
            $montoRestante = $this->getMontoMaximo() - $monto;
            $this->setMontoMaximo($montoRestante);
            $this->setMonto($monto);
            $validate = true;
        } elseif ($monto > $this->getMontoMaximo()) {
            $validate = false;
        }
        return $validate;
        //ingreso por parametro la cantidad que quiero que me den y de la cantidad maxima tengo que restarle hasta que no pueda mas
    //Creado por nahue
    }
}