<?php

namespace App\Services;

use Exception;
use App\Models\Users;
use PDO;

class UserService
{
    protected PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function createUser(Users $user)
    {
        try {
            $statement = $this->connection
                ->prepare("INSERT INTO `users`(`first_name`, `last_name`, `email`, `password`) 
                              VALUES (:firstName, :lastName, :email, :password)");
            $statement->execute([
                "firstName" => $user->firstName,
                "lastName" => $user->lastName,
                "email" => $user->email,
                "password" => $user->password
            ]);
            return $this->connection->lastInsertId();
        } catch (Exception $error) {
            return $error;
        }
    }
}
