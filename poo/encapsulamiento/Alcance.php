<?php

class User
{
    // Tipos de alcance
    //public
    //protected
    //private

    // Constante
    public const PAGINATE = 25;

    // Queremos mantener la integridad de los datos
    public $username;
    //protected $username;
    //private $username;

    public function getUsername()
    {
        // ...
    }

    // los elementos publicos pueden ser accedidos
    // a lo largo de todo el sistema

    // Si es protected, solo pueden acceder a ellos, aquellas
    // clases que hereden de mi

    // Si es private nadie puede hacer uso de ese sistema
    // ni los hijos que hereden
}