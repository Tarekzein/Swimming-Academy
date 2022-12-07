<?php

namespace App\Http\Controllers\admin\Package;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\PackageType;
use App\Models\SubscriptionType;

class DeleteController extends Controller
{

    public function delete(PackageType $package){
//        dd($manager);
        $package->delete();
        return back();
    }
}
