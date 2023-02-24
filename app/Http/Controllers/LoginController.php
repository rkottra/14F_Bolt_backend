<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    function login(Request $request) {
        
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(!Auth::attempt($request->only(['email', 'password']))){
            return response()->json([
                'status' => false,
                'message' => 'Email & Password does not match with our record.',
            ], 401);
        }

        $user = User::where('email', $request->email)->first();

        return response()->json([
            'status' => true,
            'message' => 'User Logged In Successfully',
            'token' => $user->createToken("API TOKEN")->plainTextToken
        ], 200);
    }

    public function createUser(Request $request)
    {
        try {
            //Validated
            $validated = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);
    

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            return response()->json([
                'status' => true,
                'message' => 'User Created Successfully'
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function VedettAdatok() {
        return ["Ezek szigorúan titkos adatok"];
    }
}
