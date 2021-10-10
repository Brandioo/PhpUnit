<?php

use App\Models\Users;

class UserTest extends \PHPUnit\Framework\TestCase
{
    private $user = null;

    protected function setUp(): void
    {
        $this->user = new Users();
    }

    /** @test */
    public function shouldReturnUserFirstName()
    {
        $this->user->setFirstName("Brand");
        $this->assertEquals($this->user->getFirstName(), "Brand");
    }

    /** @test */
    public function shouldReturnUserLastName()
    {
        $this->user->setFirstName("Citozi");
        $this->assertEquals($this->user->getFirstName(), "Citozi");
    }

}