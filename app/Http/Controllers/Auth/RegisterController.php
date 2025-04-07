<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\AccountModel;

class RegisterController extends Controller
{

    public function index(){
        return view('register');
    }
    public function register(RegisterRequest $request){
        $data = $request->validated();

        // Example: create user
        AccountModel::create([
            'Username' => $data['username'],
            'Password' => $data['password'],
        ]);
    
        return redirect()->route('register-get')->with('success', 'Registration successful! You can now log in.');
    }
}
