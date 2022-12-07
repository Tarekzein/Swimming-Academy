<?php

namespace App\Http\Traits\Package;

use App\Models\Branch;
use App\Models\SubscriptionType;
use Illuminate\Http\Request;

trait CreatesPackage{

    public function showForm(){

        $subs=SubscriptionType::all();
        $branches=Branch::all();
        return view("admin.Package.add",["subscription"=>$subs,"branches"=>$branches]);
    }

    public function add(Request $request) {
        $this->validator($request->all())->validate();
        $response= $this->create($request->all());

        return $response? back()->with("message","Package Added Successfully"):back()->with("error","An Error occurred");
    }

}
