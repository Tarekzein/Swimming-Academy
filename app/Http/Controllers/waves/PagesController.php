<?php

namespace App\Http\Controllers\waves;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\captain\Captain;
use App\Models\intern\Intern;
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

        return view("waves.index",$context);

    }

    public function products (){


        return view("waves.products");

    }
}
