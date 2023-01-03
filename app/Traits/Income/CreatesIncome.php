<?php

namespace App\Traits\Income;

use App\Models\Academy;
use App\Models\Branch;
use Illuminate\Http\Request;

trait CreatesIncome{

    public function showForm(){

        $academies=Academy::all();
        $branches=Branch::all();
        return view("admin.income.add",["academies"=>$academies,"branches"=>$branches]);
    }

    public function add(Request $request) {
        $this->validator($request->all())->validate();
        $response= $this->create($request->all());

        return $response? back()->with("message","Income Created Successfully"):back()->with("error","An Error occurred");
    }

}
