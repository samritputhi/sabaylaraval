<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index(){
        $menus = Menu::all();
        return view('back-end.menu.index',compact('menus'));
    }

    public function create(){
        return view('back-end.menu.create');
    }

    public function store(Request $request){

        $imageName = time().'.'.$request->txt_img->extension();
        $request->txt_img->move(public_path('news'), $imageName);
      
        $menu = new Menu();
        $menu->title = $request->txt_title;
        $menu->img = $imageName;
        $menu->des = $request->txt_des;
        $menu->status = $request->txt_status;
        $menu->od = $request->txt_od;
        $menu->save();  
        return redirect()->route('admin.menu.index');
    }

    public function edit(Request $request, $id ){
        $menu = Menu::find($id);
        return view('back-end.menu.edit', compact('menu'));
    }

    public function update(Request $request,$id){ 

        $imageName = time().'.'.$request->txt_img->extension();
        $request->txt_img->move(public_path('news'), $imageName);

        $menu = Menu::find($id);
        $menu->title = $request->txt_title;
        $menu->img = $imageName;
        $menu->des = $request->txt_des;
        $menu->status = $request->txt_status;
        $menu->od = $request->txt_od;
        $menu->update();
        return redirect()->route('admin.menu.index');
    }

    public function delete(Request $request, $id ){
        $menu = Menu::find($id)->delete();
        return redirect()->route('admin.menu.index');
    }
}
