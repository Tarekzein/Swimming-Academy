<?php

namespace App\Http\Controllers\admin\Manager;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\manager\Manager;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function all(){
        $managers=Manager::all();

        $pendingManagers=count(Manager::where("profile_status","pending")->get());
        $approvedManagers=count(Manager::where("profile_status","approved")->get());
        $branch=Branch::all();
        $context= [
            "managers"=>$managers,
            "approvedManagers"=>$approvedManagers,
            "pendingManagers"=>$pendingManagers,
            "branches"=>$branch
        ];

        return view("admin.manager.all",$context);
    }
}
