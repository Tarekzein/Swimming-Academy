<?php

namespace App\Http\Controllers\Manager\Captain;

use App\Http\Controllers\Controller;
use App\Http\Traits\Captain\CreatesCaptain;
use App\Models\captain\Captain;
use App\Models\manager\Manager;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CreateController extends Controller
{
    use CreatesCaptain;

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
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'birthdate' => $data["birthdate"],
            'address' => $data["address"],
            'whatsapp' => $data["whatsapp"],
        ]);

        $uid = $user->id;

        $captain = Captain::create(["uid" => $uid]);

        return $captain;
    }

    public function showForm()
    {
        return view("manager.captain.add");
    }
}
