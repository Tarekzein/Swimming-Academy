<?php

namespace App\Http\Controllers\admin\Income;

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
