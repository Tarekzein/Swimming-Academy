<?php

namespace App\Http\Controllers\Manager\Captain;

use App\Http\Controllers\Controller;
use App\Models\captain\Captain;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function all() {

        $captain=Captain::all()
            ->where("profile_status","approved")
            ->where("upgraded","false");

        return view("manager.captain.all",["captains"=>$captain]);

    }

}
