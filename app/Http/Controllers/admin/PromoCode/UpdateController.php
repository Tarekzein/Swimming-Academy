<?php

namespace App\Http\Controllers\admin\PromoCode;

use App\Http\Controllers\Controller;
use App\Models\admin\PromoCode;
use App\Traits\PromoCode\UpdatesPromoCode;
use Illuminate\Support\Facades\Validator;

class UpdateController extends Controller
{
    use UpdatesPromoCode;

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'academyID' => ['required'],
            'branchID' => ['required'],
            'code' => ['required'],
            'discount_percent' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required'],

        ]);
    }

    protected function update(array $data,PromoCode $promo)
    {
//        dd($data);
        $promo->update($data);

        $response= $promo->save();

        return $response;
    }

}
