<?php

namespace App\Http\Controllers\admin\Announcement;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Branch;
use App\Models\captain\Captain;
use App\Models\intern\Intern;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Psy\Util\Str;

class CreateController extends Controller
{

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'announcement' => ['required'],
            'type' => ['required'],
            'end_date' => ['required',"date"],
        ]);
    }

    protected function create(array $data){
        $users=$this->getUsers($data["branchID"],$data["userType"]);
        $announcement=new Announcement();
        $announcement->setMessage($data);
        foreach ($users as $u){
            $announcement->attach($u);
        }
        $announcement->notify();
    }

    public function form(){

        $branch=Branch::all();
        $context=[
            "branches"=>$branch
        ];
        return view("admin.announcement.add",$context);
    }




    public function createsAnnouncement(Request $request){
        $this->validator($request->all())->validate();
        $this->create($request->all());

        return back()->with("message","Announcement Created Successfully");
    }


    private function getUsers(int $branchID,string $userType) {

        if ($userType=="all"){
            return User::all();
        }

        elseif ($userType=="manager"){
            $branch=Branch::find($branchID);
            $managers= $branch->managers()->get();

            $user=[];
            foreach ($managers as $m){
                $user[]=$m->user()->first();
            }
            return $user;
        }

        elseif ($userType=="captain") {
            $user=[];
            foreach (Captain::all() as $m){
                $user[]=$m->user()->first();
            }
            return $user;
        }

        else {
            $user=[];
            foreach (Intern::all() as $m){
                $user[]=$m->user()->first();
            }
            return $user;
        }

    }


}
