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
        $data=[
            'name'=>$request->name,
            'age'=>$request->age,
            'gender'=>$request->gender
        ];
        DB::table('information_tests')->insert($data);
        return redirect('/');
    }
    function delete($id)
    {
        DB::table('information_tests')->where('id', $id)->delete();
        return redirect('/');
    }
    function edit($id){
        $user_names = DB::table('information_tests')->where('id',$id)->first();
        return view('edit', compact('user_names'));
    }
    function update(Request $request,$id)
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
        $data=[
            'name'=>$request->name,
            'age'=>$request->age,
            'gender'=>$request->gender
        ];
        DB::table('information_tests')->where('id',$id)->update($data);
        return redirect('/');
    }
}
