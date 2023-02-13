<?php

namespace App\Http\Controllers\admin\Intern;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\intern\Intern;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function all() {

        $interns=Intern::all();
        $branches=Branch::all();
        return view("admin.intern.all",["interns"=>$interns,"branches"=>$branches]);

    }

}
