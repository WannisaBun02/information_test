<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    // get
    // หน้าแรกก่อนlogin
    function home()
    {
        $user_names = DB::table('information_tests')->paginate(4);
        return view('home', compact('user_names'));
    }
    // หน้าแรกหลังlogin
    function index($id)
    {
        $user = User::find($id);
        $user_names = DB::table('information_tests')->paginate(4);
        return view('index', ['user' => $user], compact('user_names'));
    }
    // หน้าเพิ่มข้อมูล
    function insert($id)
    {
        $user = User::find($id);
        return view('insert', ['user' => $user]);
    }
    // หน้า login
    function login()
    {
        return view('login');
    }

    // post
    // เพิ่มข้อมูลลงฐานข้อมูล
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
        $data = [
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender
        ];
        DB::table('information_tests')->insert($data);
        return redirect('index');
    }
    // อัปเดตข้อมูลที่ฐานข้อมูล
    function update(Request $request, $id)
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
        $data = [
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender
        ];
        DB::table('information_tests')->where('id', $id)->update($data);
        return redirect('index');
    }
    // ลบข้อมูล
    function delete($id)
    {
        DB::table('information_tests')->where('id', $id)->delete();
        return redirect('index');
    }
    // แก้ไขข้อมูล
    function edit($id)
    {
        $user_names = DB::table('information_tests')->where('id', $id)->first();
        return view('edit', compact('user_names'));
    }
    // ออกจากระบบ
    function logout()
    {
        Auth::logout(); // ลบเซสชันและออกจากระบบ
        return redirect('/'); // นำผู้ใช้กลับไปที่หน้าหลักหรือหน้าล็อกอิน
    }
}
