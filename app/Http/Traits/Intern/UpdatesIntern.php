<?php

namespace App\Http\Traits\Intern;

use App\Models\Academy;
use App\Models\User;
use Illuminate\Http\Request;

trait UpdatesIntern{

    public function showForm(User $user){
        $intern=$user->interns()->where("uid",$user->id)->get()[0];
        $academies=Academy::all();
        $context=[
            "user"=>$user,
            "intern"=>$intern,
            'academies'=>$academies,
        ];
//        dd($context);
        return view("admin.intern.update",$context);
    }

    public function updateIntern(Request $request,User $user) {

        $this->validator($request->all())->validate();
        $response= $this->update($request,$user);

        return $response? back()->with("message","Intern Updated Successfully"):back()->with("error","An Error Occurred");
    }

}
