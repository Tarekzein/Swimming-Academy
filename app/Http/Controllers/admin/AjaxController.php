<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\captain\Captain;
use App\Models\intern\Intern;
use App\Models\manager\Manager;
use App\Models\User;
use App\Models\WaterCard;
use Illuminate\Http\Request;
use PharIo\Manifest\ElementCollectionException;

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
        $response=[];
        try {
            $manager=Manager::where("uid",$userID)->get()->first();
            $manager->update(["profile_status"=>"approved","branchID"=>$branch]);
            $manager->save();
            $response=["response"=>$manager];
        }catch (ElementCollectionException){
            $response=["response"=>"Error"];
        }
//        $manager=Manager::where("uid",$userID)->get()->first();
//        $manager->update(["profile_status"=>"approved","branchID"=>$branch]);
//        $manager->save();

        return response()->json($response);
    }

    public function rejectManager(Request $request){
        $userID=$request->input("uid");
        $response=[];

        try {
            $manager=Manager::where("uid",$userID)->get()->first();
            $manager->delete();
            $captain=Captain::where("uid",$userID)->get()->first();
            if($captain){
                $captain->upgraded="false";
                $captain->save();
            }
            $response=["response"=>"Rejected"];
        }catch (ElementCollectionException){
            $response=["response"=>"Error"];
        }

        return response()->json($response);
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


    public function watercardFilter(Request $request){
        $branch=Branch::find($request->input("branch"));
        $watercard=$branch->waterCard()->get()->first();
        $cardpercent= $watercard? ($watercard->card_credit/5000)*100:0;

        return response()->json(["watercard"=>$cardpercent]);
    }


}
