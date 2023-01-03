<?php

namespace App\Traits\Subscription;

use App\Models\Branch;
use Illuminate\Http\Request;

trait CreatesSubscription{

    public function showForm(){

        $branches=Branch::all();

        return view("admin.subscription.add",["branches"=>$branches]);
    }

    public function add(Request $request) {
        $this->validator($request->all())->validate();
        $response= $this->create($request->all());

        return $response? back()->with("message","Subscription Added Successfully"):back()->with("error","An Error occurred");
    }

}
