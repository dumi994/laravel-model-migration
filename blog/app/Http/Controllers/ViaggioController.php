<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Viaggio;
class ViaggioController extends Controller
{
    public function index()
    {
        $viaggio = Viaggio::all();
        return view('home', compact('viaggio'));
    }
}
