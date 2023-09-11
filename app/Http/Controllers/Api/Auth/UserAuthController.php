<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserLoginRequest;
use App\Http\Requests\StoreUserRegisterRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Services\UserAuthService;
use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    protected $userAuthService;

    public function __construct(UserAuthService $userAuthService)
    {
        $this->userAuthService = $userAuthService;
    }
    public function Register(StoreUserRegisterRequest $request)
    {

        $data = $request->validated();
        $data['password'] = bcrypt($request->password);

        if ($this->userAuthService->register($data)) {
            return response()->json([
                'status' => 1,
                'message' => 'User Register Successfully,
                Please use email and password to login, Thanks',

            ]);
        }
        return response()->json([
            'status' => 0,
            'message' => 'An error occurred while register user, Please check and try again'
        ], 501);


    }

    public function Login(StoreUserLoginRequest $request)
    {

    $data = $request->validated();
    if (!$this->userAuthService->UserByEmail($data['email'])) {

        return response()->json([
            'status' => 0,
            'message' => 'User Not Found, Please check and try again'
        ], 404);

    }
    if ($this->userAuthService->login($data)) {

        $user = $this->userAuthService->userInfo(auth()->id());
        // return env('TOKEN_KEY');
        $token = $user->createToken("auth_key")->plainTextToken;
        return response()->json([
            'status' => 1,
            'message' => 'Login Successfully',
            'access_token' => $token,
            'user' => auth()->user()
        ], 200);
    }
    return response()->json([
        'status' => 0,
        'message' => 'Invalid email and password'
    ], 404);


    }

    public function Profile()
    {

        $user = auth()->user();

        return response()->json([
            'status' => 1,
            'message' => 'Login Successfully',
            'data' => $this->userAuthService->profile($user->id)
        ], 200);



    }

    public function UpdateProfile(UpdateUserRequest $request)
    {
        $data = $request->validated();
        $user = auth()->user();
        if( $this->userAuthService->UserByEmail(auth()->user()->email)){
            $data['name'] = isset($data['name']) ? $data['name'] : $user->name;
            $data['email'] = isset($data['email']) ? $data['email'] : $user->email;
            if ($this->userAuthService->updateUser($user->id,$data)) {
                return response()->json([
                    'status' => 1,
                    'message' => 'User info Successfully',
                    'data' => $this->userAuthService->profile($user->id)
                ], 200);

            }

            return response()->json([
                'status' => 0,
                'message' => 'An error occurred while updating user data, Please try again later'
            ], 502);
        }
        // return $data;


    }

    public function RefreshToken()
    {

    return 'Refresh Token Route';

    }

    public function logout()
    {

        auth()->user()->tokens()->delete();

        return response()->json([
            'status' => 1,
            'message' => 'User Logged Out Successfully'
        ]);


    }
}
