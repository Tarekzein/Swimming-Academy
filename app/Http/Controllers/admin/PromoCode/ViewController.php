<?php

namespace App\Http\Controllers\admin\PromoCode;

use App\Http\Controllers\Controller;
use App\Models\admin\PromoCode;
use App\Models\Branch;
use App\Models\PackageType;
use App\Models\SubscriptionType;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function all() {

        $promocode=PromoCode::all();

        return view("admin.promocode.all",["promocodes"=>$promocode]);

    }

}
