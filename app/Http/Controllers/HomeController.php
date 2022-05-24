<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateRequest;
use App\Http\Requests\Login;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\CategoryModel;

use App\Models\RoomModel;
use App\Models\ImghotelModel;
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
    public function postlogin(Login $request){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            $user = User::where(["email" => $request->email])->first();
            $level = $user->level;
            Auth::login($user);
            if($level == 1){
                return redirect()->route('home')->with('thongbao','Đăng nhập thành công');
            }
            elseif($level == 0){
                return redirect()->route('login')->with('thongbao','Đăng nhập trang chủ thành công');
            }
        }
        else
        {
            return redirect()->route('login')->with('thongbao','Đăng nhập không thành công' );
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
    public function homepage(){
        $img = ImghotelModel::all();
        $category = CategoryModel::all();
        $room = RoomModel::limit(4)->get();
        return view('page.layout.home', compact(['room','category','img']));
    }
    public function search(Request $request){
        dd($request->all());
        $img = ImghotelModel::all();
        $category = CategoryModel::all();
        $room = RoomModel::limit(4)->get();
        return view('page.layout.home', compact(['room','category','img']));
    }
    
}
