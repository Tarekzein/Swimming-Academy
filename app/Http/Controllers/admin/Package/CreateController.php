<?php

namespace App\Http\Controllers\admin\Package;

use App\Http\Controllers\Controller;
use App\Models\PackageType;
use App\Models\SubscriptionType;
use App\Traits\Package\CreatesPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CreateController extends Controller
{
    use CreatesPackage;

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'subsID' => ['required'],
            'package_name' => ['required', 'string', 'max:255'],
            'sessions_number' => ['required'],
            'price' => ['required'],
        ]);
    }

    protected function create(array $data)
    {
        $package = PackageType::create($data);

        return $package;
    }

    protected function getSubsOfBranch(Request $request){

        $branchID=$request->input("branchID");
        $branchSubs=SubscriptionType::where("branchID",$branchID)->get();

//        dd($branchSubs);

        return response()->json($branchSubs);
    }

}
