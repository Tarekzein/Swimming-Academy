<?php

namespace App\Http\Controllers\admin\Outcome;

use App\Http\Controllers\Controller;
use App\Http\Traits\Income\UpdatesIncome;
use App\Http\Traits\Outcome\UpdatesOutcome;
use App\Models\Income;
use App\Models\Outcome;
use Illuminate\Support\Facades\Validator;

class UpdateController extends Controller
{
    use UpdatesOutcome;

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

    protected function update(array $data,Outcome $outcome)
    {
//        dd($data);
        $outcome->update($data);

        $response= $outcome->save();

        return $response;
    }

}
