<?php

namespace App\Http\Controllers\Manager\Branch;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\intern\Intern;
use App\Models\WaterCard;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function single(Request $request, Branch $branch){

        $watercard= WaterCard::latest()->where("branchID",$branch->id)->get();
        $interns=Intern::where("branch",$branch->id)->get();
        $context=[
            "branch"=>$branch,
          "watercards"=>$watercard,
          "interns"=>$interns,
        ];

        return view("manager.branch.single",$context);

    }
}
