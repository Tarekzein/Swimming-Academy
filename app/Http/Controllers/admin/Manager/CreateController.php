<?php

namespace App\Http\Controllers\admin\Manager;

use App\Http\Controllers\Controller;
use App\Http\Traits\Manager\CreatesManager;
use App\Models\manager\Manager;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CreateController extends Controller
{
    use CreatesManager;

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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'birthdate' => ['required'],
            'address' => ['required'],
            'whatsapp' => ['required'],
        ]);
    }

    protected function create(array $data)
    {
        $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'birthdate'=> $data["birthdate"],
            'address'=> $data["address"],
            'whatsapp'=> $data["whatsapp"],
        ]);

        $uid=$user->id;
//        $managerData=[
//            "uid"=>$uid,
//            "study_field"=>$data["study_field"],
//            "current_employer"=>$data["current_employer"],
//            "previous_experience"=>$data["previous_experience"],
//            "profile_photo"=>$data["profile_photo"],
//            "personal_id"=>$data["personal_id"],
//            "facility_receipt"=>$data["facility_receipt"],
//        ];

        $manager= Manager::create(["uid"=>$uid]);

        return $manager;
    }

}
