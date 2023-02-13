<?php

namespace App\Http\Controllers\wecoach\Intern\Session;

use App\Http\Controllers\Controller;
use App\Models\Academy;
use App\Models\Branch;
use App\Models\CaptainSchedule;
use App\Models\intern\Intern;
use App\Models\intern\InternSessionHistory;
use App\Models\PackageType;
use App\Models\SubscriptionType;
use App\Models\User;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function form(){
        $user=auth()->user();
        $intern=$user->interns()->get()->first();
        $academy=Academy::find($intern->academyID);
        $branches=Branch::all();
        $context=[
            "academy"=>$academy,
            "branches"=>$branches
        ];

        return view("wecoach.apply.index",$context);
    }

    public function reserve(Request $request){
        $uid=auth()->user()->id;
        $capID=$request->input("capID");
        $branchID=$request->input("branchID");
        $subsID=$request->input("subType");
        $groupType=$request->input("group_type");
        $intern=Intern::where("uid",$uid)->get()->first();
        $intern->update([
           "branch"=>$branchID,
           "subType"=>$subsID,
           "group_type"=>$groupType,
        ]);
        $sessions=CaptainSchedule::all()->where("uid",$capID);
        foreach ($sessions as $session){
            InternSessionHistory::create([
                "uid"=>$uid,
                "capID"=>$capID,
                "sessionID"=>$session->id
            ]);
        }

        return back()->with("message","تم الاشتراك بنجاح");
    }




//    Ajax
    protected function getPackOfSubs(Request $request){

        $SubsID=$request->input("subsID");
        $subcPack=PackageType::where("subsID",$SubsID)->get();

//        dd($branchSubs);

        return response()->json($subcPack);
    }

    protected function getBranchCap(Request $request){

        $branchID=$request->input("branchID");
        $captainSched=CaptainSchedule::where("branchID",$branchID)->get();
        $captains=[];
        foreach ($captainSched as $cs) {
            $captain=User::find($cs->uid);
            if (!in_array($captain, $captains)) {
                $captains[] = $captain;
            };
        }
//        dd($branchSubs);

        return response()->json(array_unique($captains));
    }

    protected function getPackPrice(Request $request){

        $packID=$request->input("packID");
        $pack=PackageType::find($packID);

//        dd($branchSubs);

        return response()->json(["price"=>$pack->price]);
    }

}
