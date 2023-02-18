<?php

namespace App\Http\Controllers\Captain;

use App\Http\Controllers\Controller;
use App\Models\captain\Captain;
use App\Models\captain\Rating;
use App\Models\CaptainSchedule;
use App\Models\User;
use App\Traits\Captain\UpdatesCaptains;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    use UpdatesCaptains;

    public function index(){
        $user=auth()->user();
        $captain=Captain::where("uid","$user->id")->get()->first();
        $announcements=$user->announcements()->latest()->get();
        $captainSchedule=DB::select("SELECT * FROM captain_schedules WHERE uid=$user->id and MONTH(date) = MONTH(CURRENT_DATE())  ORDER BY date DESC ");
//        and DAY(date) = DAY(CURRENT_DATE())
        $context=[
            "user"=>$user,
            "captain"=>$captain,
            "announcements"=>$announcements,
            "captainSchedule"=>$captainSchedule
        ];

        return view("captain.index",$context);
    }

    public function profileEdit(){
        $user=auth()->user();
        $captain=Captain::where("uid",$user->id)->get()->first();
        $capRatings=Rating::all()->where("uid",$user->id);
        $totalVal=0;
        $totalRatings=0;
        foreach ($capRatings as $r){
            $totalVal+=$r->value;
            $totalRatings+=1;
        }

        $averageRating=$totalVal/$totalRatings;
        $stars=round(($averageRating/100)*5,1);

        $context=[
            "user"=>$user,
            "captain"=>$captain,
            "rating"=>$stars
        ];

        return view("captain.edit",$context);
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'birthdate' => ['required'],
            'address' => ['required'],
            'whatsapp' => ['required'],
        ]);
    }

    protected function update(Request $data,User $user)
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
        $captain=Captain::all()->where("uid",$uid)->first();
//        dd($manager);

        $captainData=[
            "study_field"=> $data->input("study_field"),
            "current_employer"=> $data->input("current_employer"),
            "previous_experience"=> $data->input("previous_experience"),
        ];

        if($data->file("profile_photo")){
            $file=$data->file("profile_photo");
            $photoname= $file->getClientOriginalName();

            $file->move(public_path("images/uploads/"),$photoname);
            $captainData["profile_photo"]=$photoname;
        }

        if($data->file("personal_id")){
            $file=$data->file("personal_id");
            $photoname= $file->getClientOriginalName();
            $file->move(public_path("images/uploads/"),$photoname);
            $captainData["personal_id"]=$photoname;
        }

        if($data->file("rescue_certificate")){
            $file=$data->file("rescue_certificate");
            $photoname= $file->getClientOriginalName();
            $file->move(public_path("images/uploads/"),$photoname);
            $captainData["rescue_certificate"]=$photoname;
        }
        if($data->file("rescue_card")){
            $file=$data->file("rescue_card");
            $photoname= $file->getClientOriginalName();
            $file->move(public_path("images/uploads/"),$photoname);
            $captainData["rescue_card"]=$photoname;
        }


        $captain->update($captainData);
        $response= $captain->save();

        return $response;
    }


}
