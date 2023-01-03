<?php

namespace App\Traits\Branch;

use App\Models\Branch;
use Illuminate\Http\Request;

trait UpdatesBranch{

    public function showForm(Branch $branch){

        $context=[
            "branch"=>$branch,
        ];
//        dd($context);
        return view("admin.branch.update",$context);
    }

    public function updateBranch(Request $request,Branch $branch) {

        $this->validator($request->all())->validate();
        $response= $this->update($request->all(),$branch);

        return $response? back()->with("message","Branch Updated Successfully"):back()->with("error","An Error Occurred");
    }

}
