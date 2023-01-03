<?php

namespace App\Http\Controllers\Manager\Intern;

use App\Http\Controllers\Controller;
use App\Models\Academy;
use App\Models\intern\Intern;
use App\Models\User;
use App\Traits\Intern\UpdatesIntern;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UpdateController extends Controller
{
    use UpdatesIntern;

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
            'academyID' => ['required'],
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
        $intern=Intern::where("uid",$uid)->get();
//        dd($manager);

        $internData=[
            "academyID"=> $data->input("academyID"),
        ];

        if($data->file("profile_photo")){
            $file=$data->file("profile_photo");
            $photoname= $file->getClientOriginalName();

            $file->move(public_path("images/uploads/"),$photoname);
            $internData["profile_photo"]=$photoname;
        }


        $intern[0]->update($internData);
        $response= $intern[0]->save();

        return $response;
    }

    public function showForm(User $user){
        $intern=$user->interns()->where("uid",$user->id)->get()[0];
        $academies=Academy::all();
        $context=[
            "user"=>$user,
            "intern"=>$intern,
            'academies'=>$academies,
        ];
//        dd($context);
        return view("manager.intern.update",$context);
    }

}
