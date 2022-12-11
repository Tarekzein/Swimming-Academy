<?php

namespace App\Http\Controllers\Manager\Intern;

use App\Http\Controllers\Controller;
use App\Models\manager\Manager;
use App\Models\User;
use Illuminate\Http\Request;

class DeleteController extends Controller
{

    public function delete(User $user){
//        dd($manager);
        $user->delete();
        return back();
    }
}
