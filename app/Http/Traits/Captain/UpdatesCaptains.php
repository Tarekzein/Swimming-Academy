<?php

namespace App\Http\Traits\Captain;

use App\Models\User;
use Illuminate\Http\Request;

trait UpdatesCaptains{

    public function showForm(User $user){
        $captain=$user->captains()->where("uid",$user->id)->get()[0];

        $context=[
            "user"=>$user,
            "captain"=>$captain,
        ];
//        dd($context);
        return view("admin.captain.update",$context);
    }

    public function updateCaptain(Request $request,User $user) {

        $this->validator($request->all())->validate();
        $response= $this->update($request,$user);

        return $response? back()->with("message","Manager Updated Successfully"):back()->with("error","An Error Occurred");
    }

}
