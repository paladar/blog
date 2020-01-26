<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    private $userRepository;
  
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Register view
     *
     * @return \Illuminate\Http\Response
     */
    public function registerShow()
    {
        return response()->view('front.auth.register');
    }

    /**
     * Login view
     *
     * @return \Illuminate\Http\Response
     */
    public function loginShow()
    {
        return response()->view('front.auth.login');
    }

    /**
     * Registers user in system
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->userRepository->create($request->all());
        return response()->view('front.auth.login');
    }

    /**
     * Login user in system
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        //
    }

    /**
     * Logout user from system
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        //
    }
}
