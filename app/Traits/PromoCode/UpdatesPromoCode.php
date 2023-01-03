<?php

namespace App\Traits\PromoCode;

use App\Models\Academy;
use App\Models\admin\PromoCode;
use App\Models\Branch;
use Illuminate\Http\Request;

trait UpdatesPromoCode{

    public function showForm(PromoCode $promo){
        $academies=Academy::all();
        $branches=Branch::all();

        $context=[
            "promo"=>$promo,
            "academies"=>$academies,
            "branches"=>$branches,
        ];

//        dd($context);
        return view("admin.promocode.update",$context);
    }

    public function updatePackage(Request $request,PromoCode $promo) {

        $this->validator($request->all())->validate();
        $response= $this->update($request->all(),$promo);

        return $response? back()->with("message","Promo-Code Updated Successfully"):back()->with("error","An Error Occurred");
    }

}
