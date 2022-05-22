<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateRequest;
use App\Models\CategoryModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function getlist(){
        $category = CategoryModel::all();
        return view('admin.category.list', compact('category'));
    }
    public function getAdd(){
        $category = CategoryModel::all();
        return view('admin.category.add',compact('category'));
    }
    public function postAdd(ValidateRequest $request){
        $category = new CategoryModel();
        $category->name = $request->name;
        $category->save();
        return redirect('admin/category/list');
    }
    public function getEdit($id){
        $category = CategoryModel::find($id);
        return view('admin.category.edit',compact('category'));
    }
    public function postEdit(ValidateRequest $request, $id){
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
    	return redirect('admin/category/list');
    }
}
