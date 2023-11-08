<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AuthController extends Controller
{
    // เมื่อคลิกที่ login
    function login(Request $request)
    {
        $email = $request->input('email');
        $password = md5($request->input('password'));

        $user = User::where('email', $email)->first();

        if ($user && $user->password === $password) {
            // Authentication successful
            return redirect()->route('index', ['id' => $user->id])->with('user', $user);;
        }

        // Authentication failed
        return redirect()->route('login')->with('error', 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');
    }
}
