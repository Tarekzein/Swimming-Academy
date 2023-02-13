<?php

namespace App\Http\Controllers\admin\Branch;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Traits\Branch\CreatesBranch;
use Illuminate\Support\Facades\Validator;

class CreateController extends Controller
{
    use CreatesBranch;

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'dates' => ['required'],
        ]);
    }

    protected function create(array $data)
    {
        $branch = Branch::create($data);

        return $branch;
    }
}
