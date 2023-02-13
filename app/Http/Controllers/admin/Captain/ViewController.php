<?php

namespace App\Http\Controllers\admin\Captain;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\captain\Captain;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function all() {

        $captain=Captain::all()->where("profile_status","approved");
        $pendingCaptains=Captain::all()->where("profile_status","pending");
        return view("admin.captain.all",["captains"=>$captain,"pendingCaptains"=>$pendingCaptains]);

    }

}
