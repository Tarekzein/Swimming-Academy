<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $user=auth()->user();
        $admin=$user->admin()->get()->first();
        $context=[
          "user"=>$user,
          "admin"=>$admin,
        ];

        return view("admin.profile.index",$context);
    }
}
