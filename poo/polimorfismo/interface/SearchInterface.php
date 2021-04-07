<?php

// Aqui declaramos
interface Search
{
    public function all();
}

// Aqui desarrollamos
class User implements Search
{
    public function all()
    {
        return "Obteniendo a los Users";
    }
}

// Aqui desarrollamos
class Post implements Search
{
    public function all()
    {
        return "Obteniendo a los Posts";
    }
}

$user = new User();
echo $user->all(), "</br>";

$post = new Post();
echo $post->all();