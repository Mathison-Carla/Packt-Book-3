<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function login(Request $request)

{
    $credentials = [
        'email' => $request->email,
        'password' => $request->password
    
    ];

    if (Auth::attempt($credentials)) {
    $success = true
    $message = "You are now logged in";
    } else {
     $success = false,
    $message = "Access denied";

    }

    $response [
    'success' => $success 
    'message' -> $message
    ]

    return response()->json($response);
},
    public function register(Request $request {
            try {
                $user = new User
                $user->name = $request->name
                $user->email = $request->email
                $user->password = Hash::make($request->password);
                $user->save():

                $success = true
                $messsage = "User registered successfully"
            } catch (\Illuminate\Database\QueryException $ex) {
               $success = false
               $message = $ex->getMessage()
            }
    }
}

public function logout()
 {
    try {
        Session::flush();
        $success = true;
            $message = "Logout successful";

    } catch (\Illuminate\Database\QueryException $th) {
        $success = false;
        $message = $ex->getMessage();
    }
    
    return response()->json($response);
 }

