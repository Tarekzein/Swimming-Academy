<?php

namespace App\Http\Controllers\admin\Subscription;

use App\Http\Controllers\Controller;
use App\Http\Traits\Subscription\UpdatesPackage;
use App\Models\Branch;
use App\Models\SubscriptionType;
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
            'name' => ['required', 'string', 'max:255'],
            'branchID' => ['required'],

        ]);
    }

    protected function update(array $data,SubscriptionType $subs)
    {
//        dd($data);
        $subs->update($data);

        $response= $subs->save();

        return $response;
    }

}
