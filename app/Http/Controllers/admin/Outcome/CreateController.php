<?php

namespace App\Http\Controllers\admin\Outcome;

use App\Http\Controllers\Controller;
use App\Models\Outcome;
use App\Traits\Outcome\CreatesOutcome;
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
