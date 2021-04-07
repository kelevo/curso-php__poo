<?php

// Nivel de interfaz se desarrolla en interface
interface Person
{
    public function getName();
}

// Contenido se desarrolla en la clase que la implementa
class Admin implements Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    // Usamos el constructor
    public function getName()
    {
        return $this->name;
    }
}

$admin = new Admin('Elizabeth');
echo $admin->getName();

// Por que usamos una interfaz si a simple vista parece no ser util
// Una interfaz es un contrato, aquella clase que la implemente esta
// obligada a implementar las clases que en ella estan