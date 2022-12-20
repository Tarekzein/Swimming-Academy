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
        $branch=Branch::all();
        return view("admin.manager.all",["managers"=>$managers,"branches"=>$branch]);
    }
}
