<?php

use App\Models\Users;

class UserTest extends \PHPUnit\Framework\TestCase{
    private $user = null;
    protected function setUp(): void
    {
        $this->user = new Users;
    }

    /** @test */
    public function shouldReturnUserFirstName(){
        $this->user->setFirstName("Silvi");

        $this->assertEquals($this->user->getFirstName(), "Silvi");
    }

    /** @test */
    public function shouldReturnUserLastName(){
        $this->user->setLastName("Lila");

        $this->assertEquals($this->user->getLastName(), "Lila");
    }
}