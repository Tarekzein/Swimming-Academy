<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterCard extends Model
{
    use HasFactory;

    protected $fillable=[
      "branchID",
      "card_credit",
      "created_at",
      "updated_at",
    ];

    public function branches(){
        return $this->belongsTo(Branch::class,"branchID");
    }
}
