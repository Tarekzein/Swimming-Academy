<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\captain\Captain;
use App\Models\manager\Manager;
use App\Models\User;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function acceptManager(Request $request){
        $branch=$request->input("branchID");
        $userID=$request->input("uid");
        $context=[
            "profile_status"=>"approved",
            "branchID"=>$branch
        ];

        $user=User::find($userID);
        $manager=Manager::where("uid",$userID)->get()[0];
        $manager->profile_status="approved";
        $manager->branchID=$branch;
        $manager->save();

        return response()->json($manager);
    }

    public function rejectManager(Request $request){
        $userID=$request->input("uid");

        $manager=Manager::where("uid",$userID)->get()[0];
        $manager->delete();
        $captain=Captain::where("uid",$userID)->get()[0];
        $captain->upgraded="false";
        $captain->save();

        return response()->json($captain);
    }



}
