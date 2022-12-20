<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Http\Traits\Manager\UpdatesManagers;
use App\Models\Branch;
use App\Models\manager\Manager;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    use UpdatesManagers;


    public function index(Request $request){
        $manager=Manager::where("uid",$request->user()->id)->get()[0];

        $branch=Branch::find($manager->branchID);
        return view("manager.profile",["user"=>$request->user(),"branch"=>$branch]);
    }

    public function showUpdateForm(){
        $user=auth()->user();
        $manager=$user->managers()->where("uid",$user->id)->get()[0];

        $context=[
            "user"=>$user,
            "manager"=>$manager,
        ];
//        dd($context);
        return view("manager.update",$context);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'birthdate' => ['required'],
            'address' => ['required'],
            'whatsapp' => ['required'],
            "study_field"=>['required'],
            "current_employer"=>['required'],
            "previous_experience"=>['required'],
//            "personal_id"=>['required'],
//            "facility_receipt"=>['required'],
        ]);
    }

    protected function update(Request $data,$user)
    {
//        dd($data);
        $user->update([
            'name' => $data->input('name'),
            'email' =>  $data->input('email'),
            'birthdate'=>  $data->input("birthdate"),
            'address'=>  $data->input("address"),
            'whatsapp'=>  $data->input("whatsapp"),
        ]) ;

        $user->save();

        $uid=$user->id;
        $manager=Manager::where("uid",$uid)->get();
//        dd($manager);
        $managerData=[
            "study_field"=> $data->input("study_field"),
            "current_employer"=> $data->input("current_employer"),
            "previous_experience"=> $data->input("previous_experience"),
//            "profile_photo"=>$data["profile_photo"],
//            "personal_id"=>$data["personal_id"],
//            "facility_receipt"=>$data["facility_receipt"],
        ];
        if($data->file("profile_photo")){
            $file=$data->file("profile_photo");
            $photoname= $file->getClientOriginalName();

            $file->move(public_path("images/uploads/"),$photoname);
            $managerData["profile_photo"]=$photoname;
        }

        if($data->file("personal_id")){
            $file=$data->file("personal_id");
            $photoname= $file->getClientOriginalName();
            $file->move(public_path("images/uploads/"),$photoname);
            $managerData["personal_id"]=$photoname;
        }

        if($data->file("facility_receipt")){
            $file=$data->file("facility_receipt");
            $photoname= $file->getClientOriginalName();
            $file->move(public_path("images/uploads/"),$photoname);
            $managerData["facility_receipt"]=$photoname;
        }


        $manager[0]->update($managerData);
        $response= $manager[0]->save();

        return $response;
    }


    public function updateManager(Request $request) {
        $user=auth()->user();
        $this->validator($request->all())->validate();
        $response= $this->update($request,$user);

        return $response? back()->with("message","Profile Updated Successfully"):back()->with("error","An Error Occurred");
    }


}
