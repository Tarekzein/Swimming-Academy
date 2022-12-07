<?php

namespace App\Http\Controllers\admin\PromoCode;

use App\Http\Controllers\Controller;
use App\Models\admin\PromoCode;
use App\Models\Branch;
use App\Models\PackageType;
use App\Models\SubscriptionType;

class DeleteController extends Controller
{

    public function delete(PromoCode $promo){
//        dd($manager);
        $promo->delete();
        return back();
    }
}
