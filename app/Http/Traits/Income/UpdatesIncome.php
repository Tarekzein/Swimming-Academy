<?php

namespace App\Http\Traits\Income;

use App\Models\Academy;
use App\Models\admin\PromoCode;
use App\Models\Branch;
use App\Models\Income;
use App\Models\PackageType;
use App\Models\SubscriptionType;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;

trait UpdatesIncome{

    public function showForm(Income $income){
        $academies=Academy::all();
        $branches=Branch::all();

        $context=[
            "income"=>$income,
            "academies"=>$academies,
            "branches"=>$branches,
        ];

//        dd($context);
        return view("admin.income.update",$context);
    }

    public function updateIncome(Request $request,Income $income) {

        $this->validator($request->all())->validate();
        $response= $this->update($request->all(),$income);

        return $response? back()->with("message","Income Updated Successfully"):back()->with("error","An Error Occurred");
    }

}
