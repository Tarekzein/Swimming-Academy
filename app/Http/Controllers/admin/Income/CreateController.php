<?php

namespace App\Http\Controllers\admin\Income;

use App\Http\Controllers\Controller;
use App\Models\Income;
use App\Traits\Income\CreatesIncome;
use Illuminate\Support\Facades\Validator;

class CreateController extends Controller
{
    use CreatesIncome;

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
            'incomeType' => ['required'],
            'value' => ['required'],
            'incomeDate' => ['required'],
        ]);
    }

    protected function create(array $data)
    {
        $income = Income::create($data);

        return $income;
    }


}
