<?php

namespace App\Http\Controllers\admin\Outcome;

use App\Http\Controllers\Controller;
use App\Models\admin\PromoCode;
use App\Models\Branch;
use App\Models\Income;
use App\Models\Outcome;
use App\Models\PackageType;
use App\Models\SubscriptionType;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function all() {

        $outcome=Outcome::all();

        return view("admin.outcome.all",["outcomes"=>$outcome]);

    }

}
