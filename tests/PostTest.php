<?php

use PHPUnit\Framework\TestCase;
use App\Post;
use App\comment;

class PostTest extends TestCase
{
    public function test_add_comment_to_post()
    {
        // PHPUnit ira probando que se cumpla cada una de las lineas
        // de codigo aqui escritas
        $post = new Post();
        $comment = new Comment();

        // Un metodo adComment que recibira como parametro un comentario
        $post->addComment($comment);

        // Aserciones o afirmaciones
        // Metodo que sirve para contar conemtarios
        $this->assertEquals(1, $post->countComments());
        // Metodo que retorna a todos los comentarios
        $this->assertInstanceOf(Comment::class, $post->getComments()[0]);
    }
}