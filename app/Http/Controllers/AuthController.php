<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login_index(Request $request){

        return view("auth.login.index");
    }
    public function login(Request $request){
        $input = $request->all();
        $request->validate([
            "student" => "required|numeric|"
        ]);
        $user = User::query()->where("student_id","=",$input["student"])->first();
        if($user){
            Auth::login($user,false);
            return $this->Alert(true,"เข้าสู่ระบบสำเร็จ",["rdr" => route("home")]);
        }else{
            return $this->Alert(false,"รหัสนักเรียนไม่ถูกต้อง");
        }
    }
}
