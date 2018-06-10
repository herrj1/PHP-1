<?php

class User
{
    private const PASSWORD_BCRYPT = "...";

    private $username;
    private $email;
    private $password;

    public User()
    {
    }

    public User($username, $email, $password)
    {
        $this->set_username($username);
        $this->set_email($email);
        $this->set_password($password);
    }

    public function get_username()
    {
        return $this->username;
    }

    public function set_username($value)
    {
        $this->username = $value;
    }

    public function get_email()
    {
        return $this->email;
    }

    public function set_email($value)
    {
        $this->email = $value;
    }

    public function get_password()
    {
        return $this->password;
    }

    public function set_password($value)
    {
        $this->password = password_hash($value, User::PASSWORD_BCRYPT);
    }
}