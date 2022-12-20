<?php

namespace App\Http\Controllers\Manager\Captain;

use App\Http\Controllers\Controller;
use App\Http\Traits\Captain\UpgradesCaptain;
use App\Models\captain\Captain;
use App\Models\manager\Manager;
use App\Models\User;
use Illuminate\Http\Request;

class UpgradeController extends Controller
{
    use UpgradesCaptain;



    protected function upgradeCaptain(User $user){
        $id=$user->id;
        $captain=Captain::where("uid",$id)->get()[0];
        $captain->update(["upgraded"=>"true"]);
        $captain->save();
        $manager= Manager::create(["uid"=>$id]);

        return response()->json($manager);
    }
}
