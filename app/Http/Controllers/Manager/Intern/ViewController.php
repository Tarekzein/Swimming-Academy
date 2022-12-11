<?php

namespace App\Http\Controllers\Manager\Intern;

use App\Http\Controllers\Controller;
use App\Models\intern\Intern;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function all() {

        $interns=Intern::all();

        return view("manager.intern.all",["interns"=>$interns]);

    }

}
