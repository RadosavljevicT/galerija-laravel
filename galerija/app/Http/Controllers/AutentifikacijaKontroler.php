<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AutentifikacijaKontroler extends Controller
{
    public function registracija(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);


        if ($validator->fails()) {
            return response()->json([
                'statusCode' => 404,
                'message' => $validator->errors()
            ]);
        }


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
          // 'password' => $request->password
        ]);


        return response()->json([
            'statusCode' => 200,
            'user' => $user
        ]);
    }

    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json([
                'statusCode' => 404,
                'message' => $validator->errors()
            ]);
        }


        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'statusCode' => 404,
                'message' => 'Greska! Pokusajte ponovo!'
            ]);
        }

        $user = User::where('email', $request['email'])->first();
        $token = $user->createToken('TOKEN')->plainTextToken;


        return response()->json([
            'statusCode' => 200,
            'user' => $user,
            'token' => $token
        ]);
    }



    public function logout()
    {

        auth()->user()->tokens()->delete();

        return response()->json([
            'statusCode' => 200,
            'message' => 'Logout uspesan!'
        ]);
    }
}
