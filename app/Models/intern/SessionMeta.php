<?php

namespace App\Models\intern;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionMeta extends Model
{
    use HasFactory;

    protected $fillable=[
        "uid",
        "capID",
        "month",
        "pay_method",
        "created_at",
        "updated_at",
    ];

}
