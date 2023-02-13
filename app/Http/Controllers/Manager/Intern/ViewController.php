<?php

namespace App\Http\Controllers\Manager\Intern;

use App\Http\Controllers\Controller;
use App\Models\intern\Intern;
use App\Models\manager\Manager;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function all() {
        $manager=Manager::where("uid",auth()->id())->get()->first();
        $interns=Intern::all()->where("branch",$manager->branchID);

        return view("manager.intern.all",["interns"=>$interns]);

    }

}
