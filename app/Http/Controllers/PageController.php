<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }
    public function products(){
        return view('products');
    }
    public function about(){
        return view('about');
    }
    public function contacts(){
        return view('contacts');
    }
}
