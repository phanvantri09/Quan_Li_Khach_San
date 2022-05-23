<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidateRequest;
use App\Models\User;
class UsersController extends Controller
{
    //
    public function getlist(){
        $users = User::all();
    return view('admin.users.list',compact('users'));
    }
    public function getAdd(){
        $users = User::all();
        return view('admin.users.add',compact('users'));
    }
    public function postAdd(ValidateRequest $request){
        $users = new User();
        $users->name = $request->name;
        $users->password = bcrypt($request->password);
        $users->email = $request->email;
        $users->level =0;
        $users->save();
        return redirect('admin/users/list')->with('thongbao','Thêm thành công');
    }
    public function getEdit($id){
        $users = User::find($id);
        return view('admin.users.edit',compact('users'));
    }
    public function postEdit(ValidateRequest $request, $id){
        $users = User::find($id);
        $users->id = $request->id;
        $users->name = $request->name;
        $users->password = bcrypt($request->password);
        $users->email = $request->email;
        $users->save();
        return redirect('admin/users/list')->with('thongbao','Sửa thành công');
    }
    public function delete($id)
    {
    	$users = User::find($id);
    	$users->delete();
    	return redirect('admin/users/list')->with('thongbao','Xóa thành công');
    }
}
