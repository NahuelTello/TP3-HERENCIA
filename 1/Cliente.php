<?php
require_once ('Persona.php');
class Cliente extends Persona {
    private $nroCliente;

    public function __construct($cIdentificacion, $cNombre, $cApellido, $cNroCliente){
        parent ::__construct($cIdentificacion, $cNombre, $cApellido);
        $this->nroCliente = $cNroCliente;
    //Creado por nahue
    }

    /**
     * Get the value of nroCliente
     */
    public function getNroCliente()
    {
        return $this->nroCliente;
    }

    /**
     * Set the value of nroCliente
     */
    public function setNroCliente($nroCliente)
    {
        $this->nroCliente = $nroCliente;
    }

    public function __toString(){
        $str = parent::__toString();
        $str .= "\nNumero de Cliente: {$this->getNroCliente()}";
        return $str;
    //Creado por nahue
    }
}