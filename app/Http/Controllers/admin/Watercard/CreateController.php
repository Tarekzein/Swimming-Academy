<?php

namespace App\Http\Controllers\admin\Watercard;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\WaterCard;
use App\Traits\WaterCard\CreatesWaterCard;
use Illuminate\Support\Facades\Validator;

class CreateController extends Controller
{
    use CreatesWaterCard;

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'branchID' => ['required'],
            'card_credit' => ['required'],

        ]);
    }


    protected function creates(array $data){
        $branch=Branch::find($data["branchID"]);
        $watercard=$branch->waterCard()->get()->first();
        if($watercard){
            $watercard->update(["card_credit"=>$data["card_credit"]]);
        }
        else {
            $watercard=WaterCard::create($data);
        }

        return $watercard;
    }

}
