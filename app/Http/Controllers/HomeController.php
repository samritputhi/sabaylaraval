<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{News, Category};

class HomeController extends Controller
{
    public function index(){
       
        $latest = News::where('status',1)->orderBy('created_at','DESC')->limit(4)->get();
        $category = Category::orderBy('order')->with('news')->get();
        $entertainment = News::where('category_id',1)->where('status',1)->orderBy('created_at','DESC')->limit(9)->get();
        return view('front-end.home.index',compact('latest','entertainment','category'));
    }

    public function category($category_id){
        $category = News::where('category_id',$category_id)->get();
        return view('front-end.home.category',compact('category_id','category'));
    }

    public function detail($id){
        $detail = News::find($id);
        return view('front-end.home.detail',compact('detail'));
    }
}
