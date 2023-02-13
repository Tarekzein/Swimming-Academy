<?php

namespace App\Http\Controllers\wecoach\Intern;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $user=auth()->user();
        $context=[
            "user"=>$user
        ];

        return view("wecoach.intern.profile",$context);
    }
}
