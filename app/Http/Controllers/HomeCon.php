<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeCon extends Controller
{
    public function index(){
        return view("home");
    }

    public function redirects(){
        $usertype= Auth::user()->usertype;

        if($usertype=='1'){
            return view('admin\productcategory\index');
        }

        else{
            return view('home');
        }
    }
}
