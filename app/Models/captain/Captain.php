<?php

namespace App\Models\captain;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Captain extends Model
{
    use HasFactory;
    protected $fillable=[
        "uid",
        "study_field",
        "certificate",
        "current_employer",
        "previous_experience",
        "profile_photo",
        "profile_status",
        "personal_id",
        "rescue_certificate",
        "rescue_card",
        "upgraded",
        "created_at",
        "updated_at",
    ];


    public function user(){
        return $this->belongsTo(User::class,"uid");
    }
}
