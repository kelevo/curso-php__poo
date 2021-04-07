<?php

// Molde para crear personas
class Person
{
    public function greet()
    {
        // this sera el name obtenido de Admin
        return "Hola $this->name";
    }
}