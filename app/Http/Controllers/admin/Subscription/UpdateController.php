<?php

namespace App\Http\Controllers\admin\Subscription;

use App\Http\Controllers\Controller;
use App\Models\SubscriptionType;
use App\Traits\Subscription\UpdatesSubscription;
use Illuminate\Support\Facades\Validator;

class UpdateController extends Controller
{
    use UpdatesSubscription;

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
