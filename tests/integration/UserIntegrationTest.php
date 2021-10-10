<?php

use App\Services\UserService;
use App\Models\Users;

class UserIntegrationTest extends \PHPUnit\Framework\TestCase
{
    private  $connection;

    protected function setUp(): void
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=unit_test", "root", "");
    }

    /** @test */
    public function shouldReturnCategoryName()
    {
        $userService = new UserService($this->connection);

        //create user object
        $user = new Users();

        $user->firstName = "Brand";
        $user->lastName = "Citozi";
        $user->email = "brand@gmail.com";
        $user->password = "ok123";

        $actual = $userService->createUser($user);

        $this->assertNotNull($actual);
    }


}