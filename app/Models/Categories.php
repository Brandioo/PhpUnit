<?php

namespace App\Models;

class Categories
{
    private $name;
    private $friendlyURL;
    private $posts = [];

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getFriendlyURL()
    {
        return $this->friendlyURL;
    }

    /**
     * @param mixed $friendlyURL
     */
    public function setFriendlyURL($friendlyURL): void
    {
        $this->friendlyURL = $friendlyURL;
    }

    /**
     * @return array
     */
    public function getPosts(): array
    {
        return $this->posts;
    }

    /**
     * @param array $posts
     */
    public function setPosts(Posts $post): void
    {
        $this->posts[] = $post;
    }


}