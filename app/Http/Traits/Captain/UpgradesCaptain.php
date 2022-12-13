<?php

namespace App\Http\Traits\Captain;

use App\Models\manager\Manager;
use App\Models\User;
use Illuminate\Http\Request;

trait UpgradesCaptain{

    public function upgrade (Request $request,User $user) {

        $response= $this->upgradeCaptain($user);

        return response()->json(["manager"=>$response]);

    }


}
