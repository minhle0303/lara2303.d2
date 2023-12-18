<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function checkUser(Request $request)
    {
        if ($request->session()->has('user')) {
            $request->session()->forget('user');
        }
        $email = $request->email;
        $pwd = $request->pwd;
        $user = DB::table('tbuser')->where('email', $email)->first();
        if ($user != null && $user->password == $pwd) {
            // $request->session()->push('user', $user);
            // push() luu bien mang
            // tao bien session de luu thong tin TK dang nhap thanh cong
            session(['user' => $user]);
            // $request->session()->put('user', $user);
            if ($user->role == 2) {
                // return redirect('admin/users');
                return redirect()->route('adminuserlist');
            } else {
                // return redirect("user/details/" . $user->accountid);
                return redirect()->route('userprofile', ['id' => $user->id]);
            }
        } else {
            return redirect('login')->with('message', 'Login Fail.');
        }
    }

    public function users(){
        $ds = DB::table('tbuser')->get();
        return view('admin.user.user',['users'=>$ds]);


    }
    public function details($id){
        $user = DB::table('tbuser')->find($id);
        return view('user.profile',['user'=>$user]);


    }
}
