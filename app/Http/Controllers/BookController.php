<?php

namespace App\Http\Controllers;


use App\Http\Requests\BookR;

use App\Models\CategoryModel;
use Illuminate\Http\Request;
use App\Models\BookModel;
use App\Models\RoomModel;
use Illuminate\Support\Facades\Auth;
use App\Models\ImghotelModel;


class BookController extends Controller
{
    public function book($id){
        return view('page.layout.book', compact('id'));
    }
    public function bookpost(BookR $request){
        $room = new RoomModel;
        $room = RoomModel::find($request->id_room);
        if($room->status == 0){
        $total = $room->price;
        $BookModel = new BookModel();
        $BookModel->name= $request->name;
    	$BookModel->email= $request->email;
        $BookModel->numberPhone= $request->numberPhone;
        $BookModel->id_room= $request->id_room;
        $BookModel->date_start= $request->date_start;
        $BookModel->date_end= $request->date_end;
        $BookModel->amountPeople= $request->amountPeople;
        $BookModel->total= $total;
        $BookModel->id_user= Auth::user()->id;
    	$BookModel->save();
        $room->status = 1;
        $room->save();
        return redirect()->route('homepage')->with('thongbao','Đặt phòng thành công');
        }
        else{
            return back()->with('error','Phòng đã có người đặt');
        }
        
    }
    public function checkout(){
        
    }
    public function delete($id)
    {
    	$category = BookModel::find($id);
    	$category->delete();
    	return back()->with('thongbao','Xóa thành công');
    }
    
}
