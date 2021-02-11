<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class BackhomeController extends Controller
{
    public function index(){
        $homes = Home::all();
        return view('partials.backpages.home', compact('homes'));
    }
}
