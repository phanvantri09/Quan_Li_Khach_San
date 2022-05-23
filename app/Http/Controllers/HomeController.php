<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function home(){
        return view('admin.home');
    }
    public function login(){
        return view("page.login");
    }
    public function register(){
        return view("page.register");
    }
    public function postlogin(ValidateRequest $request){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            $user = User::where(["email" => $request->email])->first();
            $level = $user->level;
            Auth::login($user);
            if($level == 1){
                return redirect()->route('home')->with('thongbao','Đăng nhập thành công');
            }
            else{
                return redirect()->route('login')->with('thongbao','Đăng nhập thành công');
            }
        }
        else
        {
            return redirect()->route('login')->with('thongbao','Đăng nhập không thành công');
        }
    }
    public function postregister(ValidateRequest $request){
        //dd($request->all());
        $users = new User();
        $users->name= $request->name;
    	$users->email= $request->email;
    	$users->password= bcrypt($request->password);
    	$users->level= 0;
    	$users->save();
    	return redirect('dangnhap')->with('thongbao','Đăng kí thành công');
    
    }
}
