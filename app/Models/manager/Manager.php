<?php

namespace App\Models\manager;

use App\Models\Branch;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;

    protected $fillable=[
        "uid",
        "branchID",
        "study_field",
        "current_employer",
        "previous_experience",
        "profile_photo",
        "personal_id",
        "facility_receipt",
        "profile_status",
        "created_at",
        "updated_at",
    ];

    public function user(){
        return $this->belongsTo(User::class,"uid");
    }

    public function branches(){
        return $this->belongsTo(Branch::class,"branchID");
    }

}
