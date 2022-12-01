<?php

namespace App\Http\Traits\Captain;

use Illuminate\Http\Request;

trait CreatesCaptain{

    public function showForm(){

        return view("admin.captain.add");
    }

    public function add(Request $request) {
        $this->validator($request->all())->validate();
        $response= $this->create($request->all());

        return $response? back()->with("message","Captain Added Successfully"):back()->with("error","An Error occurred");
    }

}
