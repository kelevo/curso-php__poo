<?php

// Las clases abstractas no se pueden instanciar
class User
{
    // Llenamos
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    // Usamos
    // Para evitar que sobreescriban el nombre usamos "final"
    // final public function getName()
    public function getName()
    {
        return $this->name;
    }
}

// Herencia
class Admin extends User
{
    // ...
}

// Creamos un Admin
$admin = new Admin('Patrick');
echo $admin->getName();