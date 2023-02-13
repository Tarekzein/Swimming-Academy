<?php

namespace App\Models\captain;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable=[
      "uid",
      "rater",
      "value",
      "description",
      "created_at",
      "updated_at",
    ];
}
