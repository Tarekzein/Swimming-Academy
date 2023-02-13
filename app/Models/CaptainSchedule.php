<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaptainSchedule extends Model
{
    use HasFactory;

    protected $fillable=[
        "uid",
        "branchID",
        "date",
        "attendet",
        "updated_at",
        "created_at",
    ];
}
