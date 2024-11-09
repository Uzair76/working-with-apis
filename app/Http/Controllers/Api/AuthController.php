<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

    public function signup(Request $request)
    {
        $validateUser = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required',
            ]
        );
        if ($validateUser->fails()) {
            return response()->error('eror occured', $validateUser->errors()->all(), 401);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return response()->success('SignUp Successfully', $user);


    }

    public function login(Request $request)
    {
        // Validate user input
        $validateUser = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
                'password' => 'required|string'
            ]
        );

        // Check if validation fails
        if ($validateUser->fails()) {
            return response()->error('Validation errors', $validateUser->errors()->all(), 422);


        }

        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $authUser = Auth::user();
            return response()->success('Logged in successfully...', [
                'token' => $authUser->createToken("API Token")->plainTextToken,
                'token_type' => 'bearer'
            ]);
        } else {
            return response()->error('Invalid credentials', $validateUser->errors()->all(), 401);

        }
    }


    public function logout(Request $request)
    {
        // Delete all tokens for the user
        $user = $request->user();
        $user->tokens()->delete();
        return response()->success('Logged out successfully');

    }

}
