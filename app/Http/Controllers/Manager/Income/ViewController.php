<?php

namespace App\Http\Controllers\Manager\Income;

use App\Http\Controllers\Controller;
use App\Models\admin\PromoCode;
use App\Models\Branch;
use App\Models\Income;
use App\Models\manager\Manager;
use App\Models\PackageType;
use App\Models\SubscriptionType;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function all() {
        $manager=Manager::where("uid",auth()->user()->id)->get()->first() ;
        $income=Income::all()->where("branchID",$manager->branchID);

        return view("manager.income.all",["incomes"=>$income]);

    }

}
