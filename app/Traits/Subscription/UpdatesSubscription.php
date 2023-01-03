<?php

namespace App\Traits\Subscription;

use App\Models\Branch;
use App\Models\SubscriptionType;
use Illuminate\Http\Request;

trait UpdatesSubscription{

    public function showForm(SubscriptionType $subs){

        $context=[
            "subs"=>$subs,
            "branches"=>Branch::all(),
        ];
//        dd($context);
        return view("admin.subscription.update",$context);
    }

    public function updateSubscription(Request $request,SubscriptionType $subs) {

        $this->validator($request->all())->validate();
        $response= $this->update($request->all(),$subs);

        return $response? back()->with("message","Subscription Updated Successfully"):back()->with("error","An Error Occurred");
    }

}
