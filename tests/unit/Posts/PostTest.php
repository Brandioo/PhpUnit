<?php

use App\Models\Categories;
use App\Models\Posts;

class PostTest extends \PHPUnit\Framework\TestCase{
    private Posts $post;

    protected function setUp(): void
    {
        $this->post = new Posts;
    }

    /** @test */
    public function shouldReturnPostTitle(){
        $this->post->setTitle("My first post");

        $this->assertEquals($this->post->getTilte(), "My first post");
    }

    /** @test */
    public function shouldReturnPostDescription(){
        $this->post->setDescription("Test description");

        $this->assertEquals($this->post->getDescription(), "Test description");
    }

    /** @test */
    public function shouldReturnPostCategory(){
        $category = new Categories;
        $category->setName("Sports category");
        $category->setFriendlyUrl("sports-category");

        $this->post->setCategory($category);

        $this->assertEquals($this->post->getCategory(), $category);
    }
}