<?php

namespace App\Http\Traits\Manager;

use App\Models\manager\Manager;
use App\Models\User;
use Illuminate\Http\Request;

trait UpdatesManagers{

    public function showUpdateForm(User $user){
        $manager=$user->managers()->where("uid",$user->id)->get()[0];

        $context=[
            "user"=>$user,
            "manager"=>$manager,
        ];
//        dd($context);
        return view("admin.manager.update",$context);
    }

    public function updateManager(Request $request,User $user) {

        $this->validator($request->all())->validate();
        $response= $this->update($request,$user);

        return $response? back()->with("message","Manager Updated Successfully"):back()->with("error","An Error Occurred");
    }

}
