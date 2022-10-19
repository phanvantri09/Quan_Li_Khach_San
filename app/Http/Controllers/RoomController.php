<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomModel;
use App\Models\CategoryModel;
use App\Models\ImghotelModel;
use App\Http\Requests\RoomR;

use App\Models\BookModel;
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
    public function postAdd(Request $request){
        $RoomModel = new RoomModel();
        $RoomModel->id_category = $request->id_category;
        $RoomModel->code = $request->code;
        $RoomModel->status = 0;
        $RoomModel->maxPeople = $request->maxPeople;
        $RoomModel->minPeople = $request->minPeople;
        $RoomModel->price = $request->price;
        $RoomModel->amountBathroom = $request->amountBathroom;
        $RoomModel->amountBed = $request->amountBed;
        $RoomModel->decription = $request->decription;
        $RoomModel->save();
        return redirect('admin/room/list')->with('thongbao','Thêm thành công');
    }
    public function getEdit($id){
        $room = RoomModel::find($id);
        return view('admin.room.edit',compact('room'));
    }
    public function postEdit(RoomR $request, $id){
        $RoomModel = RoomModel::find($id);
        $RoomModel->id_category = $request->id_category;
        $RoomModel->code = $request->code;
        $RoomModel->status = 0;
        $RoomModel->maxPeople = $request->maxPeople;
        $RoomModel->minPeople = $request->minPeople;
        $RoomModel->price = $request->price;
        $RoomModel->amountBathroom = $request->amountBathroom;
        $RoomModel->amountBed = $request->amountBed;
        $RoomModel->decription = $request->decription;
        $RoomModel->save();
        return redirect('admin/room/list')->with('thongbao','Sửa thành công');
    }
    public function delete($id)
    {
    	$category = RoomModel::find($id);
    	$category->delete();
    	return redirect('admin/room/list')->with('thongbao','Xóa thành công');
    }
}
