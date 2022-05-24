<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImgR;
use App\Models\CategoryModel;
use App\Models\RoomModel;
use App\Models\ImghotelModel;
class ImghotelController extends Controller
{
    public function getlist(){
        $category = CategoryModel::all();
        return view('admin.category.list', compact('category'));
    }
    public function getAdd(RoomModel $id){
        return view('admin.img.add',compact('id'));
    }
    public function postAdd(ImgR $request){
        $ImghotelModel = new ImghotelModel();
        $code = $request->code;
        $ImghotelModel->id_room = $request->id_room;
        if($request->has('img'))
        {
            $img = $request->img;
            $extension = $request->img->extension();
            $imgName = time().'-'.$code.'.'.$extension; 
            $img->move(public_path('imgUploads'), $imgName);
            $request->img = $imgName;
        }
        $ImghotelModel->img = $request->img;
        $ImghotelModel->save();
        return redirect('admin/room/list')->with('thongbao','Thêm thành công');
    }
    public function getEdit($id){
        $category = CategoryModel::find($id);
        return view('admin.category.edit',compact('category'));
    }
    public function postEdit(CategoryR $request, $id){
        $category = CategoryModel::find($id);
        $category->id = $request->id;
        $category->name = $request->name;
        $category->save();
        return redirect('admin/category/list')->with('thongbao','Sửa thành công');
    }
    public function delete($id)
    {
    	$category = CategoryModel::find($id);
    	$category->delete();
    	return redirect('admin/category/list')->with('thongbao','Xóa thành công');
    }
}
