<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DarshboardController extends Controller
{
    public function index(){
        return view('back-end.darshboard.index');
    }
}
