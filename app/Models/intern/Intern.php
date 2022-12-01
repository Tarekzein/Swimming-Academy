<?php

namespace App\Models\intern;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Intern extends Model
{
    use HasFactory;

    protected $fillable=[
        "uid",
        "academyID",
        "branch",
        "group_type",
        "created_at",
        "updated_at",
    ];
}
