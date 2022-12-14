<?php

namespace App\Http\Controllers\admin\Branch;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Traits\Branch\UpdatesBranch;
use Illuminate\Support\Facades\Validator;

class UpdateController extends Controller
{
    use UpdatesBranch;

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],

        ]);
    }

    protected function update(array $data,Branch $branch)
    {
//        dd($data);
        $branch->update($data) ;

        $branch->save();

        $response= $branch->save();

        return $response;
    }

}
