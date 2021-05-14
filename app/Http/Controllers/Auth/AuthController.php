<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    /**
     * Realiza o login na conta
     *
     * @param Request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
    	if(!$token = auth()->attempt($request->only('agency', 'account', 'password'))){
    		return response(null, 401);
    	}

    	return response()->json(compact('token'));
    }

    /**
     * Realiza o logout da conta
     *
     * @return void
     */
    public function logout()
    {
    	auth()->logout();
    }
}
