<?php

namespace App\Traits\Outcome;

use App\Models\Academy;
use App\Models\Branch;
use App\Models\Outcome;
use Illuminate\Http\Request;

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
