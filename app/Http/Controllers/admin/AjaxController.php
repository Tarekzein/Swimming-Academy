<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\captain\Captain;
use App\Models\intern\Intern;
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
        $manager=Manager::where("uid",$userID)->get()->first();
        $manager->profile_status="approved";
        $manager->branchID=$branch;
        $manager->save();

        return response()->json($manager);
    }

    public function rejectManager(Request $request){
        $userID=$request->input("uid");

        $manager=Manager::where("uid",$userID)->get()->first();
        $manager->delete();
        $captain=Captain::where("uid",$userID)->get()->first();
        $captain->upgraded="false";
        $captain->save();

        return response()->json($captain);
    }

    public function acceptCaptain(Request $request){

        $uid=$request->input("uid");
        $captain=Captain::where("uid",$uid)->get()->first();
        $intern=Intern::where("uid",$uid)->get()->first();
        if($intern){
            $intern->delete();
        }
        $captain->update(["profile_status"=>"approved"]);
        $done= $captain->save();

        return response()->json($done);


    }

    public function rejectCaptain(Request $request){
        $userID=$request->input("uid");
        $intern=Intern::where("uid",$userID)->get()->first();
        $captain=Captain::where("uid",$userID)->get()->first();

        if($intern){
            $captain->delete();
            $intern[0]->update(["upgraded"=>"false"]);
            return response()->json(["response"=>"became intern"]);
        }

        $user= User::find($userID);
        $user->delete();

        return response()->json(["response"=>"user deleted"]);
    }

}
