<?php

namespace App\Http\Controllers\admin\Branch;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\SubscriptionType;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){

        $branches=Branch::all();
        $subscription=SubscriptionType::all();

        return view("admin.branch.index",["branches"=>$branches,"subscription"=>$subscription]);
    }

    public function single(Request $request,Branch $branch){
        $managers=$branch->managers()->get();
        $watercard=$branch->waterCard()->get()->first();
        $cardPercent= $watercard? ($watercard->card_credit/5000)*100:0;
        $context=[
            "branch"=>$branch,
            "managers"=>$managers,
            "watercard"=>$watercard,
            "cardPercent"=>$cardPercent,
        ];

        return view("admin.branch.single",$context);
    }

    public function all() {

        $branch=Branch::all();

        return view("admin.branch.all",["branches"=>$branch]);

    }

}
