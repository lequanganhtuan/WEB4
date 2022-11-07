<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('Pages.Home');
    }

    public function product() {
        return view('Pages.Product');
    }

    public function blog() {
        return view('Pages.News');
    }

    // public function product() {
    //     return view('Pages.Product');
    // }
    // public function product() {
    //     return view('Pages.Product');
    // }
    // public function product() {
    //     return view('Pages.Product');
    // }


}
