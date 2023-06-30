<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function index(Request $request){
        $i=1;
        $trains=null;
        $azienda= $request->input('company');
        $numeroTreno= $request->input('train_code');
        $query=Train::query();
        if (!empty($azienda)) {
            $query->where("company", "=", $azienda);
        }
        if (!empty($numeroTreno)) {
            $query->where("train_code", "=", $numeroTreno);
        }
        $trains=$query->get();
        return view('welcome', compact('trains', 'i')); 
    }
}
