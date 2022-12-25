<?php

namespace App\Http\Controllers\Manager\Income;

use App\Http\Controllers\Controller;
use App\Models\Income;

class DeleteController extends Controller
{

    public function delete(Income $income){
//        dd($manager);
        $income->delete();
        return back();
    }
}
