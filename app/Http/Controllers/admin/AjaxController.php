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
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\In;
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

    public function internsFilter(Request $request){
        $branch=$request->input("branch");
        if($branch==0){
            $interns=Intern::all();
        }
        else{
        $interns=Intern::where("branch",$branch)->get();

        }

        return response()->json(["interns"=>count($interns)]);
    }

    public function managersFilter(Request $request){
        $branch=$request->input("branch");
        if($branch==0){
            $pendingManagers=count(Manager::where("profile_status","pending")->get());
            $approvedManagers=count(Manager::where("profile_status","approved")->get());
        }
        else{
            $pendingManagers=count(Manager::where("profile_status","pending")->where("branchID",$branch)->get());
            $approvedManagers=count(Manager::where("profile_status","approved")->where("branchID",$branch)->get());
        }

        return response()->json(["pendingManagers"=>$pendingManagers,"approvedManagers"=>$approvedManagers]);
    }

    public function billingFilter(Request $request){
        $branch=$request->input("branch");
//        if all branches
        if($branch==0){
        $incomeWecoach=DB::select("SELECT SUM(value) as totalIncomes FROM incomes WHERE DAY(incomeDate) = DAY(CURRENT_DATE()) and academyID=1")[0];
        $incomeWaves=DB::select("SELECT SUM(value) as totalIncomes FROM incomes WHERE DAY(incomeDate) = DAY(CURRENT_DATE()) and academyID=2")[0];

        $outcomeWaves=DB::select("SELECT SUM(value) as totalOutcome FROM outcomes WHERE DAY(outcomeDate) = DAY(CURRENT_DATE()) and academyID=2")[0];
        $outcomeWecoach=DB::select("SELECT SUM(value) as totalOutcome FROM outcomes WHERE DAY(outcomeDate) = DAY(CURRENT_DATE()) and academyID=1")[0];
        }
//        if specific branch
        else{
             $incomeWecoach=DB::select("SELECT SUM(value) as totalIncomes FROM incomes WHERE DAY(incomeDate) = DAY(CURRENT_DATE()) and branchID=$branch and academyID=1")[0];
            $incomeWaves=DB::select("SELECT SUM(value) as totalIncomes FROM incomes WHERE DAY(incomeDate) = DAY(CURRENT_DATE()) and branchID=$branch and academyID=2")[0];

            $outcomeWaves=DB::select("SELECT SUM(value) as totalOutcome FROM outcomes WHERE DAY(outcomeDate) = DAY(CURRENT_DATE()) and branchID=$branch and academyID=2")[0];
            $outcomeWecoach=DB::select("SELECT SUM(value) as totalOutcome FROM outcomes WHERE DAY(outcomeDate) = DAY(CURRENT_DATE()) and branchID=$branch and academyID=1")[0];


        }
        if($incomeWecoach->totalIncomes==null){
            $incomeWecoach->totalIncomes=0;
        }
        if($incomeWaves->totalIncomes==null){
            $incomeWaves->totalIncomes=0;
        }
        if($outcomeWecoach->totalOutcome==null){
            $outcomeWecoach->totalOutcome=0;
        }
        if($outcomeWaves->totalOutcome==null){
            $outcomeWaves->totalOutcome=0;
        }

        $resp=[
            "incomeWecoach"=>$incomeWecoach->totalIncomes,
            "incomeWaves"=>$incomeWaves->totalIncomes,

            "outcomeWecoach"=>$outcomeWecoach->totalOutcome,
            "outcomeWaves"=>$outcomeWaves->totalOutcome,
        ];


        return response()->json($resp);
    }


}
