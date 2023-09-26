<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserLoginRequest;
use App\Services\UserAuthService;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    protected $authService;

    public function __construct(UserAuthService $userAuthService) {
        $this->authService = $userAuthService;
    }

    /**
     * login
     *
     * @return void
     */
    public function Login()
    {
        $data['name'] = 'Test Account';
        $data['email'] = 'testadmin@mail.com';
        $data['password'] = bcrypt('1234567890');

        if (!$this->authService->UserByEmail($data['email'])) {
            $this->authService->register($data);
            return view('auth.login');
        }
        return view('auth.login');
    }


   public function loginPost(StoreUserLoginRequest $request){
    
        $data = $request->validated();
    // dd($data);
        if ($this->authService->login($data)) {
                return redirect()->route('admin.dashboard')->with('success', 'Login Successful');
        }
        return redirect()->back()->with('error', 'Incorrect Email or Password!');
    }
    /**
     * register
     *
     * @return void
     */
    public function Register()
    {
        return view('auth.signup');
    }

    /**
     * dashboard
     *
     * @return void
     */
    public function Dashboard()
    {
        return view('backend.dashboard');
    }

    /**
     * logout
     *
     * @return void
     */
    public function Logout()
    {
        $this->authService->logout();

         return view('auth.logout');
    }
}
