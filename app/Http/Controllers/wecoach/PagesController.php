<?php

namespace App\Http\Controllers\wecoach;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\captain\Captain;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index (){
        $branches=Branch::all();
        $captains=Captain::all();
        $context=[
          "branches"=>$branches,
          "captains"=>$captains,
        ];
        return view("wecoach.index",$context);

    }

    public function products (){


        return view("wecoach.products");

    }
}
