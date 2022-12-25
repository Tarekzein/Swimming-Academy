<?php

namespace App\Http\Controllers\admin\Outcome;

use App\Http\Controllers\Controller;
use App\Http\Traits\Income\CreatesIncome;
use App\Http\Traits\Outcome\CreatesOutcome;
use App\Models\admin\PromoCode;
use App\Models\Income;
use App\Models\Outcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CreateController extends Controller
{
    use CreatesOutcome;

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
            'outcomeType' => ['required'],
            'value' => ['required'],
            'outcomeDate' => ['required'],
        ]);
    }

    protected function create(array $data)
    {
        $outcome = Outcome::create($data);

        return $outcome;
    }


}
