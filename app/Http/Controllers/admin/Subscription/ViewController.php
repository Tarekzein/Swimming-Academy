<?php

namespace App\Http\Controllers\admin\Subscription;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\SubscriptionType;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function all() {

        $subscription=SubscriptionType::all();

        return view("admin.subscription.all",["subscriptions"=>$subscription]);

    }

}
