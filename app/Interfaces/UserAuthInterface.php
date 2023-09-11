<?php

namespace App\Interfaces;

interface UserAuthInterface
{
    /**
     * register
     *
     * @param  mixed $userData
     * @return void
     */
    public function register( array $userData);
    /**
     * login
     *
     * @param  mixed $userData
     * @return void
     */
    public function login(array $userData);

    /**
     * UserByEmail
     *
     * @param  mixed $email
     * @return void
     */
    public function UserByEmail($email);

    /**
     * logout
     *
     *
     * @return void
     */
    public function logout();
    /**
     * profile
     *
     * @param  mixed $userId
     * @return void
     */
    public function profile($userId);

    /**
     * updateUser
     *
     * @param  mixed $userId
     * @param  mixed $newData
     * @return void
     */
    public function updateUser($userId, $newData);
    /**
     * deleteUser
     *
     * @param  mixed $userId
     * @return void
     */
    public function deleteUser($userId);
}
