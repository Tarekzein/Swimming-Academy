<?php

namespace App\Http\Controllers\admin\Package;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\PackageType;
use App\Models\SubscriptionType;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function all() {

        $packages=PackageType::all();

        return view("admin.package.all",["packages"=>$packages]);

    }

}
