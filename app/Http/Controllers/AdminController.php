<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function index()
    {
        $user_names = DB::table('information_tests')->get();
        return view('index', compact('user_names'));
    }
    function insert()
    {
        return view('insert');
    }
    function insertt(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'gender' => 'required|not_in:เลือกเพศ',
        ], [
            'gender.not_in' => 'กรุณาเลือกเพศ',
            'name.required' => 'กรุณากรอกชื่อ',
            'age.required' => 'กรุณากรอกอายุ'
        ]);
    }
    function delete($id)
    {
        DB::table('information_tests')->where('id', $id)->delete();
        return redirect('/');
    }
}
