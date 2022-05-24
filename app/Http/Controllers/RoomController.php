<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomModel;
use App\Models\CategoryModel;
use App\Models\ImghotelModel;
class RoomController extends Controller
{
    public function room(){
        return view('page.layout.room');
    }
    public function show(RoomModel $id){
        $room = RoomModel::all();
        $category = CategoryModel::all();
        $img = ImghotelModel::all();
        return view('admin.room.show', compact(['category','room','img','id']));
    }
    public function getlist(){
        $room = RoomModel::all();
        $category = CategoryModel::all();
        return view('admin.room.list', compact(['category','room']));
    }
    public function getAdd(){
        $category = RoomModel::all();
        return view('admin.room.add',compact('category'));
    }
    public function postAdd(CategoryR $request){
        $category = new CategoryModel();
        $category->name = $request->name;
        $category->save();
        return redirect('admin/room/list')->with('thongbao','Thêm thành công');
    }
    public function getEdit($id){
        $category = CategoryModel::find($id);
        return view('admin.room.edit',compact('category'));
    }
    public function postEdit(CategoryR $request, $id){
        $category = CategoryModel::find($id);
        $category->id = $request->id;
        $category->name = $request->name;
        $category->save();
        return redirect('admin/room/list')->with('thongbao','Sửa thành công');
    }
    public function delete($id)
    {
    	$category = CategoryModel::find($id);
    	$category->delete();
    	return redirect('admin/room/list')->with('thongbao','Xóa thành công');
    }
}
