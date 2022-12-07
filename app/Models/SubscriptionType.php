<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionType extends Model
{
    use HasFactory;
    protected $fillable=[
        "branchID",
        "name",
        "created_at",
        "updated_at",
    ];


    public function branches(){
        return $this->belongsTo(Branch::class,"branchID");
    }
}
