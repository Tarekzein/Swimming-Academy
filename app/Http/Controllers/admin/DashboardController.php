<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\captain\Captain;
use App\Models\intern\Intern;
use App\Models\manager\Manager;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $interns=Intern::all();
        $captains=Captain::all();
        $managers=Manager::all();
        $context=[
            "interns"=>$interns,
            "captains"=>$captains,
            "managers"=>$managers,
        ];

        return view("admin.home",$context);
    }




}
