<?php

namespace App\Traits\PromoCode;

use App\Models\Academy;
use App\Models\Branch;
use Illuminate\Http\Request;

trait CreatesPromoCode{

    public function showForm(){

        $academies=Academy::all();
        $branches=Branch::all();
        return view("admin.promocode.add",["academies"=>$academies,"branches"=>$branches]);
    }

    public function add(Request $request) {
        $this->validator($request->all())->validate();
        $response= $this->create($request->all());

        return $response? back()->with("message","Promo-code Created Successfully"):back()->with("error","An Error occurred");
    }

}
