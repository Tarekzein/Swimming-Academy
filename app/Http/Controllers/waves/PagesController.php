<?php

namespace App\Http\Controllers\waves;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index (){


        return view("waves.index");

    }

    public function products (){


        return view("waves.products");

    }
}
