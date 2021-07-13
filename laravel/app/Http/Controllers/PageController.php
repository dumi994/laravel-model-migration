<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Viaggi;

class PageController extends Controller
{
    public function index(){
        $viaggi = Viaggio::all();
        return view('home', compact('viaggi'));
    }

    public function about(){
        return view('about');
    }
    public function contacts(){
        return view('contacts');
    }

}
