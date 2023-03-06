<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{News,Category};

class NewController extends Controller
{
    public function index(){
        $categories = Category::all();
        $news = News::all();
        return view('back-end.news.index',compact('news','categories'));
    }

    public function create(){
        $category = Category::all();
        return view('back-end.news.create',compact('category'));
    }

    public function store(Request $request){

        $imageName = time().'.'.$request->txt_img->extension();
        $request->txt_img->move(public_path('news'), $imageName);
      
        $news = new News();
        $news->title = $request->txt_title;
        $news->category_id = $request->txt_category_id;
        $news->img = $imageName;
        $news->des = $request->txt_des;
        $news->status = $request->txt_status;
        $news->order = $request->txt_od;
        $news->save();  
        return redirect()->route('admin.news.index');
    }

    public function edit( $id ){
        $category = Category::all();
        $news = News::find($id);
        return view('back-end.news.edit', compact('news','category'));
    }

    public function update(Request $request,$id){ 
        $news = News::find($id);
        if($request->txt_img){
            $imageName = time().'.'.$request->txt_img->extension();
            $request->txt_img->move(public_path('news'), $imageName);
            
        }else{
            $imageName = $news->img;
        }
        
      
        $news->title = $request->txt_title;
        $news->category_id = $request->txt_category_id;
        $news->img = $imageName;
        $news->des = $request->txt_des;
        $news->status = $request->txt_status;
        $news->order = $request->txt_od;
        $news->update(); 
        return redirect()->route('admin.news.index');
    }

    public function delete( $id ){
        $news = News::find($id)->delete();
        return redirect()->route('admin.news.index');
    }
}
