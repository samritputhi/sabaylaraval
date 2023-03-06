<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('back-end.category.index',compact('categories'));
    }

    public function create(){
        return view('back-end.category.create');
    }

    public function store(Request $request){
      
        $menu = new Category();
        $menu->title = $request->txt_title;
        $menu->status = $request->txt_status;
        $menu->order = $request->txt_od;
        $menu->save();  
        return redirect()->route('admin.category.index');
        
    }

    public function edit($id ){

        $category = Category::find($id);
        return view('back-end.category.edit', compact('category'));

    }

    public function update(Request $request,$id){ 

        $menu = Category::find($id);
        $menu->title = $request->txt_title;
        $menu->status = $request->txt_status;
        $menu->order = $request->txt_od;
        $menu->update();
        return redirect()->route('admin.category.index');

    }

    public function delete($id){

        $menu = Category::find($id);
        $menu->delete();
        return redirect()->route('admin.category.index');

    }

}
