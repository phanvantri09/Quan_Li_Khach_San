<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateRequest;
use App\Http\Requests\Login;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\CategoryModel;
use App\Models\BookModel;

use App\Models\Event;
use App\Models\RoomModel;
use App\Models\ImghotelModel;
class HomeController extends Controller
{
    
    public function type($id){
        $room = RoomModel::where('id_category','=',$id)->get();
        $img = ImghotelModel::all();
        $category = CategoryModel::all();
        return view('page.layout.type', compact(['room','category','img']));
    }
    public function userbook( $id){
        $id = BookModel::where('id_user', '=',$id)->get();
        $category = CategoryModel::all();
        $room = RoomModel::all();
        $img = ImghotelModel::all();
        return view('page.layout.userbook', compact(['room','category','id','img']));
    }
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
                return redirect()->route('listroom')->with('thongbao','Đăng nhập thành công');
            }
            elseif($level == 0){
                return redirect()->route('homepage')->with('thongbao','Đăng nhập trang chủ thành công');
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
    	return redirect()->route('login')->with('thongbao','Đăng kí thành công');
    
    }
    public function homepage(){
        $img = ImghotelModel::all();
        $category = CategoryModel::all();
        $room = RoomModel::limit(4)->get();
        return view('page.layout.home', compact(['room','category','img']));
    }
    public function search(Request $request){ 
        //dd($request->all());
        $date_start = $request->date_start;
        $date_end = $request->date_end;
        $amountPeople = $request->amount;
        $amountBed = $request->amountBed;
        $img = ImghotelModel::all();
        $category = CategoryModel::all();
        $room = RoomModel::where('maxPeople','>=',$amountPeople)->where('minPeople','<=',$amountPeople)->where('amountBed','<=',$amountBed)->get();
        return view('page.layout.home', compact(['room','category','img']));
    }
    public function viewroom(RoomModel $id){
        
        return view('page.layout.viewroom', compact('id'));
    }
    public function index(Request $request)
    {
        if($request->ajax()) {
             $data = BookModel::whereDate('date_start', '>=', $request->date_start)
                       ->whereDate('date_end',   '<=', $request->date_end)
                       ->get(['id', 'email', 'date_start', 'date_end']);
            
             return response()->json($data);
        }
        return view('fullcalender');
    }
 
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function ajax(Request $request)
    {
 
        switch ($request->type) {
           case 'add':
              $event = BookModel::create([
                  'email' => $request->email,
                  'date_start' => $request->date_start,
                  'date_end' => $request->date_end,
              ]);
 
              return response()->json($event);
             break;
  
           case 'update':
              $event = BookModel::find($request->id)->update([
                  'email' => $request->email,
                  'date_start' => $request->date_start,
                  'date_end' => $request->date_end,
              ]);
 
              return response()->json($event);
             break;
  
           case 'delete':
              $event = BookModel::find($request->id)->delete();
              return response()->json($event);
             break;
             
           default:
             # code...
             break;
        }
    }
    public function logout(){
        Auth::logout();
        return back();
    }
}
