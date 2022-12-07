<?php

namespace App\Models\intern;

use App\Models\User;
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

    public function user(){
        return $this->belongsTo(User::class,"uid");
    }
}
