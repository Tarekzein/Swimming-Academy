<?php

namespace App\Http\Controllers\admin\Branch;

use App\Http\Controllers\Controller;
use App\Models\Branch;

class DeleteController extends Controller
{

    public function delete(Branch $branch){
//        dd($manager);
        $branch->delete();
        return redirect(route("admin.branches"))->with("message","Branch Deleted Successfully");
    }
}
