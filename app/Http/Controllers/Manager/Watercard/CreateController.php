<?php

namespace App\Http\Controllers\Manager\Watercard;

use App\Http\Controllers\Controller;
use App\Http\Traits\WaterCard\CreatesWaterCard;
use App\Models\Branch;
use App\Models\WaterCard;
use Illuminate\Http\Request;
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

        $watercard= WaterCard::create($data);

        return $watercard;
    }

}
