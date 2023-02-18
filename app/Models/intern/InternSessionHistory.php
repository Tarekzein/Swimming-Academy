<?php

namespace App\Models\intern;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternSessionHistory extends Model
{
    use HasFactory;
    protected $fillable=[
      "uid",
      "capID",
      "sessionID",
      "sessionTime",
      "attendance",
      "created_at",
      "updated_at",
    ];

}
