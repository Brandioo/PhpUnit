<?php

use App\Models\Categories;
use App\Models\Posts;

class CategoryTest extends \PHPUnit\Framework\TestCase{
    private Categories $category;
    private Posts $post1;
    private Posts $post2;

    protected function setUp() : void{
        $this->category = new Categories;
        $post1 = new Posts;
        $post2 = new Posts;

        $post1->setTitle("Post1");
        $post1->setDescription("Post1 description");

        $post2->setTitle("Post2");
        $post2->setDescription("Post2 description");
    }

    /** @test */
    public function shouldReturnCategoryName(){
        $this->category->setName("Sport category");

        $this->assertEquals($this->category->getName(), "Sport category");
    }

    /** @test */
    public function shouldReturnPosts(){

        $this->category->setPost($this->post1);
        $this->category->setPost($this->post2);

        $postList = $this->category->getPosts(); // [0 => post1, 1 => post2]
        $firstPost = $postList[0];

        $this->assertEquals($firstPost->getTilte(), $this->post1->getTilte());

    }
}