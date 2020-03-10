<?php
use PHPUnit\Framework\TestCase;
use Apteles\Acme\Models\Post;

/** @test */
class PostTest extends TestCase
{
    public function test_if_title_can_be_assign(){
        $post = new Post();
        $post->setTitle('Hello World');

        $this->assertEquals('Hello World', $post->getTitle());
    }
}