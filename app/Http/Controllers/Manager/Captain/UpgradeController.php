<?php

namespace App\Http\Controllers\Manager\Captain;

use App\Http\Controllers\Controller;
use App\Http\Traits\Captain\UpgradesCaptain;
use App\Models\manager\Manager;
use App\Models\User;
use Illuminate\Http\Request;

class UpgradeController extends Controller
{
    use UpgradesCaptain;



    protected function upgradeCaptain(User $user){
        $id=$user->id;
        $captain=$user->captains()->where("uid",$id);
        $captain->delete();
        $manager= Manager::create(["uid"=>$id]);

        return $manager;
    }
}
