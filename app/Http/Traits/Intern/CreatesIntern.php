<?php

namespace App\Http\Traits\Intern;

use App\Models\Academy;
use Illuminate\Http\Request;

trait CreatesIntern{

    public function showForm(){
        $academies=Academy::all();
        return view("admin.intern.add",["academies"=>$academies]);
    }

    public function add(Request $request) {
        $this->validator($request->all())->validate();
        $response= $this->create($request->all());

        return $response? back()->with("message","Intern Added Successfully"):back()->with("error","An Error occurred");
    }

}
