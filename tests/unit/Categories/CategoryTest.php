<?php

use App\Models\Categories;
use App\Models\Posts;

class CategoryTest extends \PHPUnit\Framework\TestCase
{
    private $category = null;

    protected function setUp(): void
    {
        $this->category = new Categories();
    }

    /** @test */
    public function shouldReturnUserFirstName()
    {
        $post1 = new Posts;
        $post2 = new Posts;
        $post1->setTitle("Good Category");
        $post1->setDescription("Lart");

        $post2->setTitle("Good Category");
        $post2->setDescription("Poshte");

        $this->category->setPosts($post1);
        $this->category->setPosts($post2);

        $firstPost = $this->category->getPosts()[0];

        $this->assertEquals($firstPost->getTitle(), $post1->getTitle());
    }
}