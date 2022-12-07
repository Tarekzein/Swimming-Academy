<?php

namespace App\Http\Controllers\admin\PromoCode;

use App\Http\Controllers\Controller;
use App\Http\Traits\PromoCode\CreatesPromoCode;
use App\Models\admin\PromoCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CreateController extends Controller
{
    use CreatesPromoCode;

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

    protected function create(array $data)
    {
        $promo = PromoCode::create($data);

        return $promo;
    }


}
