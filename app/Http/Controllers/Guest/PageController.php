<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function index(){
        $i=1;
        $trains= Train::all();
        return view('welcome', compact('trains', 'i')); 
    }
}
