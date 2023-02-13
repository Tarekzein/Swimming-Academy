<?php

namespace App\Http\Controllers\admin\Captain;

use App\Http\Controllers\Controller;
use App\Models\captain\Captain;
use App\Models\User;
use App\Traits\Captain\UpdatesCaptains;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UpdateController extends Controller
{
    use UpdatesCaptains;

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

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
