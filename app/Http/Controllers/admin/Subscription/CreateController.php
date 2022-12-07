<?php

namespace App\Http\Controllers\admin\Subscription;

use App\Http\Controllers\Controller;
use App\Http\Traits\Subscription\CreatesPackage;
use App\Http\Traits\Subscription\CreatesSubscription;
use App\Models\Branch;
use App\Models\SubscriptionType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CreateController extends Controller
{
    use CreatesSubscription;

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

    protected function create(array $data)
    {
        $subscription = SubscriptionType::create($data);

        return $subscription;
    }
}
