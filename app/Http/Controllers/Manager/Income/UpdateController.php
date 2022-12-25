<?php

namespace App\Http\Controllers\Manager\Income;

use App\Http\Controllers\Controller;
use App\Http\Traits\Income\UpdatesIncome;
use App\Models\Academy;
use App\Models\Branch;
use App\Models\Income;
use App\Models\manager\Manager;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UpdateController extends Controller
{
    use UpdatesIncome;

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
            'incomeType' => ['required'],
            'value' => ['required'],
            'incomeDate' => ['required'],

        ]);
    }

    protected function update(array $data,Income $income)
    {
//        dd($data);
        $income->update($data);

        $response= $income->save();

        return $response;
    }

    public function showForm(Income $income){
        $academies=Academy::all();
        $manager=Manager::where("uid",auth()->user()->id)->get()->first() ;
        $branch=Branch::find($manager->branchID);

        $context=[
            "income"=>$income,
            "academies"=>$academies,
            "branch"=>$branch,
        ];

//        dd($context);
        return view("manager.income.update",$context);
    }

}
