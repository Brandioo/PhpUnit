<?php

use App\Models\Posts;

class PostTest extends \PHPUnit\Framework\TestCase
{
    private $post = null;

    protected function setUp(): void
    {
        $this->post = new Posts();
    }

    /** @test */
    public function shouldReturnPostTitle()
    {
        $this->post->setTitle("GoodWork");
        $this->assertEquals($this->post->getTitle(), "GoodWork");
    }

    /** @test */
    public function shouldReturnPost()
    {
        $this->post->setTitle("GoodWork");
        $this->post->setCategory("Work");
        $this->post->setDescription("Good");
        $this->assertEquals($this->post->getTitle(), "GoodWork");
        $this->assertEquals($this->post->getCategory(), "Work");
        $this->assertEquals($this->post->getDescription(), "Good");
    }
}