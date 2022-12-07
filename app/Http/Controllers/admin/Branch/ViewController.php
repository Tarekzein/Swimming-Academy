<?php

namespace App\Http\Controllers\admin\Branch;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function all() {

        $branch=Branch::all();

        return view("admin.branch.all",["branches"=>$branch]);

    }

}
