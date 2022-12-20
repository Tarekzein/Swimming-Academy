<?php

namespace App\Http\Traits\WaterCard;

use App\Models\Branch;
use Illuminate\Http\Request;

trait CreatesWaterCard {

public function form(Request $request) {
    $branchID= $request->input("branch");
    $branch= Branch::find($branchID);
    $context=[
      "branch"=>$branch,
    ];

    return view("manager.watercard.add",$context);
}


public function create(Request $request){

    $this->validator($request->all())->validate();
    $response= $this->creates($request->all());

    return $response?back()->with("message","Watercard Added Successfully"):back()->with("message","error occurred");
}

}
