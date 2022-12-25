<?php

namespace App\Http\Traits\Outcome;

use App\Models\Academy;
use App\Models\admin\PromoCode;
use App\Models\Branch;
use App\Models\Income;
use App\Models\Outcome;
use App\Models\PackageType;
use App\Models\SubscriptionType;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;

trait UpdatesOutcome{

    public function showForm(Outcome $outcome){
        $academies=Academy::all();
        $branches=Branch::all();

        $context=[
            "outcome"=>$outcome,
            "academies"=>$academies,
            "branches"=>$branches,
        ];

//        dd($context);
        return view("admin.outcome.update",$context);
    }

    public function updateOutcome(Request $request,Outcome $outcome) {

        $this->validator($request->all())->validate();
        $response= $this->update($request->all(),$outcome);

        return $response? back()->with("message","Outcome Updated Successfully"):back()->with("error","An Error Occurred");
    }

}
