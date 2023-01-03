<?php

namespace App\Traits\Branch;

use Illuminate\Http\Request;

trait CreatesBranch{

    public function showForm(){

        return view("admin.branch.add");
    }

    public function add(Request $request) {
        $this->validator($request->all())->validate();
        $response= $this->create($request->all());

        return $response? back()->with("message","Branch Added Successfully"):back()->with("error","An Error occurred");
    }

}
