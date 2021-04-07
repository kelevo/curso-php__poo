<?php

// Includes
include './person.php';
include './user.php';
include './admin.php';

// Creamos un objeto a partir del molde User
$user = new User;
// 4user es de tipo administrador que a su vez hereda de Person
$user->type = new Admin;
echo $user->type->greet();
