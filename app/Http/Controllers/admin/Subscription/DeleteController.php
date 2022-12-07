<?php

namespace App\Http\Controllers\admin\Subscription;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\SubscriptionType;

class DeleteController extends Controller
{

    public function delete(SubscriptionType $subs){
//        dd($manager);
        $subs->delete();
        return back();
    }
}
