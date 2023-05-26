<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function index(){
        $message = "コントローラーからビューへ渡された値。";
        return view('home', ['message' => $message]);
    }

}
