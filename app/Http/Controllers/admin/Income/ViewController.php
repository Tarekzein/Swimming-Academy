<?php

namespace App\Http\Controllers\admin\Income;

use App\Http\Controllers\Controller;
use App\Models\admin\PromoCode;
use App\Models\Branch;
use App\Models\Income;
use App\Models\PackageType;
use App\Models\SubscriptionType;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function all() {

        $income=Income::all();

        return view("admin.income.all",["incomes"=>$income]);

    }

}
