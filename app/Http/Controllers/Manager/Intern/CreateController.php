<?php

namespace App\Http\Controllers\Manager\Intern;

use App\Http\Controllers\Controller;
use App\Http\Traits\Intern\CreatesIntern;
use App\Models\Academy;
use App\Models\captain\Captain;
use App\Models\intern\Intern;
use App\Models\manager\Manager;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CreateController extends Controller
{
    use CreatesIntern;

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
            'academyID' => ['required'],
        ]);
    }

    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'birthdate' => $data["birthdate"],
            'address' => $data["address"],
            'whatsapp' => $data["whatsapp"],
        ]);

        $uid = $user->id;

        $intern = Intern::create(["uid" => $uid,"academyID"=>$data["academyID"]]);

        return $intern;
    }
    public function showForm()
    {
        $academies=Academy::all();
        return view("manager.intern.add",["academies"=>$academies]);
    }
}
