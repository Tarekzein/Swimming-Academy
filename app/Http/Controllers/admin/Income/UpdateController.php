<?php

namespace App\Http\Controllers\admin\Income;

use App\Http\Controllers\Controller;
use App\Http\Traits\Income\UpdatesIncome;
use App\Models\Income;
use Illuminate\Support\Facades\Validator;

class UpdateController extends Controller
{
    use UpdatesIncome;

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

    protected function update(array $data,Income $income)
    {
//        dd($data);
        $income->update($data);

        $response= $income->save();

        return $response;
    }

}
