<?php

namespace App\Http\Controllers\admin\Package;

use App\Http\Controllers\Controller;
use App\Models\PackageType;
use App\Traits\Package\UpdatesPackage;
use Illuminate\Support\Facades\Validator;

class UpdateController extends Controller
{
    use UpdatesPackage;

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'subsID' => ['required'],
            'package_name' => ['required', 'string', 'max:255'],
            'sessions_number' => ['required'],
            'price' => ['required'],

        ]);
    }

    protected function update(array $data,PackageType $package)
    {
//        dd($data);
        $package->update($data);

        $response= $package->save();

        return $response;
    }

}
