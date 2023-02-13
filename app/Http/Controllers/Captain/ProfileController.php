<?php

namespace App\Http\Controllers\Captain;

use App\Http\Controllers\Controller;
use App\Models\captain\Captain;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $user=auth()->user();
        $captain=Captain::where("uid","$user->id")->get()->first();
        $announcements=$user->announcements()->latest()->get();
        $context=[
            "user"=>$user,
            "captain"=>$captain,
            "announcements"=>$announcements,
        ];

        return view("captain.index",$context);
    }
}
