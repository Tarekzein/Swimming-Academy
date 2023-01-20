<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Academy;
use App\Models\Branch;
use App\Models\captain\Captain;
use App\Models\intern\Intern;
use App\Models\manager\Manager;
use App\Models\WaterCard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $interns=Intern::all();
        $captains=Captain::all();
        $managers=Manager::all();
        $branches=Branch::all();
        $watercard=WaterCard::all()->first();
        $cardpercent=($watercard->card_credit/5000)*100;
        $context=[
            "interns"=>$interns,
            "captains"=>$captains,
            "managers"=>$managers,
            "branches"=>$branches,
            "watercard"=>$cardpercent,
        ];

        return view("admin.index",$context);
    }

    public function billing(){
        $branches=Branch::all();
        $context=[
            "branches"=>$branches,
        ];

        return view("admin.billing.index",$context);
    }

    public function promocode(){
        $branches=Branch::all();
        $academy=Academy::all();
        $context=[
            "branches"=>$branches,
            "academies"=>$academy,
        ];

        return view("admin.promocode.index",$context);
    }


}
