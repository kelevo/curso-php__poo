<?php

// Molde de usuario
class User
{
    public $type;
}

// Molde del administrador
class Admin
{
    // Creamos un metodo que se encargue de saludar
    public function greet()
    {
        return "Hola administrador";
    }
}

// Creamos una variable que va a contener al elemento creado
// a partir de usuarios (Un nuevo objeto a partir del usuario)
$user = new User;
// El tipo de usuario sera un administrador
$user->type = new Admin;
// Imprimimos (usuario -> tipo administrador -> metodo saludar)
echo $user->type->greet();