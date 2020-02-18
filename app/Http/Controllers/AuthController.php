<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            // Authentication passed...
            $user = auth()->user();
            $user->api_token = Str::random(60);
            $user->save();
            return $user;
        }

        return response()->json([
            'error' => 'Unauthenticated user',
            'code' => 401,
        ], 401);
    }

    public function logout()
    {
        if (auth()->user()) {
            $user = auth()->user();
            $user->api_token = null; // clear api token
            $user->save();

            return response()->json([
                'message' => 'Thank you for using our application',
            ]);
        }

        return response()->json([
            'error' => 'Unable to logout user',
            'code' => 401,
        ], 401);
    }

    public function register(Request $request)
    {
        $rules = [
            'name' => 'unique:users|required',
            'email' => 'unique:users|required',
            'password' => 'required',
            'age' => 'min:12',
        ];

        $input = $request->only('name', 'email', 'password');
        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'error' => $validator->messages()]);
        }
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $user = User::create(['name' => $name, 'email' => $email, 'password' => Hash::make($password)]);
        return response()->json($user);
    }

}
