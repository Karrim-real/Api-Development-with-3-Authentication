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
     * updateProfile
     *
     * @param  mixed $userId
     * @return void
     */
    public function updateProfile($userId, $newData);
    /**
     * deleteUser
     *
     * @param  mixed $userId
     * @return void
     */
    public function deleteUser($userId);
}
