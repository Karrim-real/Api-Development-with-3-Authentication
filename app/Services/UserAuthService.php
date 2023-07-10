<?php

namespace App\Services;

use App\Interfaces\UserAuthInterface;
use App\Models\User;

class UserAuthService implements UserAuthInterface
{
    /**
     * userAuthModel
     *
     * @var mixed
     */
    protected $userAuthModel;

     /**
      * __construct
      *
      * @param  mixed $user
      * @return void
      */
     function __construct(User $user) {
        $this->userAuthModel = $user;
    }


    /**
     * register
     *
     * @param  mixed $userData
     * @return void
     */
    public function register(array $userData)
    {
        return $this->userAuthModel::create($userData);
    }

    /**
     * login
     *
     * @param  mixed $userData
     * @return void
     */
    public function login(array $userData)
    {
        return $this->userAuthModel::attempt($userData);
    }

    /**
     * profile
     *
     * @param  mixed $userId
     * @return void
     */
    public function profile($userId)
    {
        return $this->userAuthModel::findOrFail($userId);
    }

    /**
     * updateProfile
     *
     * @param  mixed $userId
     * @param  mixed $newData
     * @return void
     */
    public function updateProfile($userId, $newData)
    {
        return $this->userAuthModel::whereId($userId)->update($newData);
    }

    /**
     * deleteUser
     *
     * @param  mixed $userId
     * @return void
     */
    public function deleteUser($userId)
    {
        return $this->userAuthModel::destroy($userId);
    }

    /**
     * logout
     *
     * @return void
     */
    public function logout()
    {
        return $this->userAuthModel::logout();
    }
}
