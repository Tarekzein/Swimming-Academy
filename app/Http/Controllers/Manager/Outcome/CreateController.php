<?php

namespace App\Http\Controllers\Manager\Outcome;

use App\Http\Controllers\Controller;
use App\Models\Academy;
use App\Models\Branch;
use App\Models\manager\Manager;
use App\Models\Outcome;
use App\Traits\Outcome\CreatesOutcome;
use Illuminate\Support\Facades\Validator;

class CreateController extends Controller
{
    use CreatesOutcome;

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'academyID' => ['required'],
            'branchID' => ['required'],
            'outcomeType' => ['required'],
            'value' => ['required'],
            'outcomeDate' => ['required'],
        ]);
    }

    protected function create(array $data)
    {
        $outcome = Outcome::create($data);

        return $outcome;
    }

    public function showForm(){
        $manager=Manager::where("uid",auth()->user()->id)->get()->first() ;
        $academies=Academy::all();
        $branch=Branch::find($manager->branchID);

        return view("manager.outcome.add",["academies"=>$academies,"branch"=>$branch]);
    }

}
