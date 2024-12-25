<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class HomeController extends Controller
// {
//     public function index(){
//         return "Hello Dear!!!";
//     }
// }

// home page showing
// class HomeController extends Controller
// {
//     public function index(){
//         return view('welcome.blade.php');
//     }
// }

//home page ar main name  welcome
//.blade.php >>>extension (no need extension)

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    // public function contact (){
    //     return "Contact Us";
    // }

    // showing contact us view file

    public function contact (){
        return view('contact');
    }
}

