<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Admin1Controller extends Controller
{
    public function loginad(){
        return view('admin.loginad');
    }

    public function postLoginad(Request $request){
        if(Auth::attempt(['eamil'=>$request->email,'password'=>$request->password,'roles'=>1])){
            return redirect()->route('admin.loginad');
        }

        return redirect()->back()->with('err','Sai thông tin');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('loginad');
    }
}
