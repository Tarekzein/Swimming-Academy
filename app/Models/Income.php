<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $fillable=[
      "academyID",
      "branchID",
      "incomeType",
      "value",
      "incomeDate",
      "created_at",
      "updated_at",
    ];
}
