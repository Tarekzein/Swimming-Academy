<?php

namespace App\Http\Controllers\wecoach;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index (){


        return view("wecoach.index");

    }

    public function products (){


        return view("wecoach.products");

    }
}
