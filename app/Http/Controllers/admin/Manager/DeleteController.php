<?php

namespace App\Http\Controllers\admin\Manager;

use App\Http\Controllers\Controller;
use App\Models\manager\Manager;
use App\Models\User;
use Illuminate\Http\Request;

class DeleteController extends Controller
{

    public function delete(User $user){
//        dd($manager);
        $user->delete();
        return back()->with("message","Deleted Successfully");
    }
}
