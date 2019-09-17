<?php

class UsersController
{
    private $repository;
    public UsersController()
    {
        $this->repository = new UsersRepository();
    }
    public UsersController(IUsersRepository $repository)
    {
        $this->repository = $repository;
    }
    public function register()
    {
        return new User();
    }

    public function register($params)
    {
        if (isset($params['username'])) {
            $user = new User($params['username'], $params['email'], $params['password']);
            $this->repository->add($user);
            return '/users/index.php';
        }
    }
}
