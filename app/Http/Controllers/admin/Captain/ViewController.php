<?php

namespace App\Http\Controllers\admin\Captain;

use App\Http\Controllers\Controller;
use App\Models\captain\Captain;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function all() {

        $captain=Captain::all();

        return view("admin.captain.all",["captains"=>$captain]);

    }

}
