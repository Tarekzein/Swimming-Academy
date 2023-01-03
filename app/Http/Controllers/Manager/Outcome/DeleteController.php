<?php

namespace App\Http\Controllers\Manager\Outcome;

use App\Http\Controllers\Controller;
use App\Models\Income;
use App\Models\Outcome;

class DeleteController extends Controller
{

    public function delete(Outcome $outcome){
//        dd($manager);
        $outcome->delete();
        return back();
    }
}
