<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Shoes;

class StockYardController extends Controller
{
    public function show(){
        $shoes = Shoes::all();
        return view('stockyard', compact('shoes'));
    }
}
