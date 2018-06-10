<?php

interface IUsersRepository
{
    public function add(User $user);
}

class UsersRepository implements IUsersRepository
{
    private static $connection_string;

    public static function set_connection_string($value)
    {
        UsersRepository::$connection_string = $value;
    }

    private $connection;

    public UsersRepository()
    {
        // $connection = new mysqli(...);
    }

    public function add(User $user)
    {
        $statement = $this->connection->prepare('INSERT INTO "users" ("id", "username", "email", "password") VALUES (?, ?, ?, ?)');
        $statement->bind_param("id", NULL);
        $statement->bind_param("username", $user->get_username());
        $statement->bind_param("email", $user->get_email());
        $statement->bind_param("password", $user->get_password());

        if (!$statement->execute())
            throw new Exception("Execute failed: ({$stmt->errno}) {$stmt->error}");
    }
}