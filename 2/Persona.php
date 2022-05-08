<?php
class Persona{
    private $dni;
    private $nombre;
    private $apellido;

    public function __construct( $nroDocumento, $nombrePersona, $apellidoPersona){
        $this->dni = $nroDocumento;
        $this->nombre = $nombrePersona;
        $this->apellido = $apellidoPersona;
    //Creado por nahue
    }

    

    /**
     * Get the value of dni
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set the value of dni
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get the value of apellido
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function __toString(){
        $str = "Nombre:{$this->getNombre()}\nApellido:{$this->getApellido()}\nDni:{$this->getDni()}";
        return $str;
    //Creado por nahue
    }
}