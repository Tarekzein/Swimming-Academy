<?php

namespace App\Http\Traits\Manager;

use Illuminate\Http\Request;

trait CreatesManager{

    public function showManagerForm(){

        return view("admin.manager.add");
    }

    public function addManager(Request $request) {
        $this->validator($request->all())->validate();
        $response= $this->create($request->all());

        return $response? back()->with("message","manager Added successfully"):back()->with("error","An Error occurred");
    }

}
