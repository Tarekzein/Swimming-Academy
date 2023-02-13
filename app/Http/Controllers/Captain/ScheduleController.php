<?php

namespace App\Http\Controllers\Captain;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\CaptainSchedule;
use App\Models\Income;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ScheduleController extends Controller
{
    public function form(){
        $user=auth()->user();
        $branches=Branch::all();
        $schedules=$user->schedules()->latest()->get();
        $context=[
            "branches"=>$branches,
            "schedules"=>$schedules,
        ];
        return view("captain.schedule.index",$context);
    }

    public function addSchedule(Request $request){
        $data=array(
            "dates"=>$request->input("dates"),
            "branchID"=>$request->input("branchID"),
            "uid"=>auth()->user()->id
        );
        $this->validator($data)->validate();
        $this->create($data);

        return back()->with("message","Schedules Added Successfully");
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'dates' => 'required|string',
            'branchID' => 'required',
        ]);
    }

    protected function create(array $data)
    {
        $dates=explode(",",$data["dates"]);
        foreach ($dates as $date){
            CaptainSchedule::create(["uid"=>$data["uid"],"branchID"=>$data["branchID"],"date"=>$date]);
        }

    }
}
