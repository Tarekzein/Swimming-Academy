<?php

namespace App\Http\Traits\Package;

use App\Models\Branch;
use App\Models\PackageType;
use App\Models\SubscriptionType;
use App\Models\User;
use Illuminate\Http\Request;

trait UpdatesPromoCode{

    public function showForm(PackageType $package){

        $context=[
            "package"=>$package,
            "subscriptions"=>SubscriptionType::all(),
            "branches"=>Branch::all(),
        ];
//        dd($context);
        return view("admin.package.update",$context);
    }

    public function updatePackage(Request $request,PackageType $package) {

        $this->validator($request->all())->validate();
        $response= $this->update($request->all(),$package);

        return $response? back()->with("message","Package Updated Successfully"):back()->with("error","An Error Occurred");
    }

}
