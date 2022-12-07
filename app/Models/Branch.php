<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $fillable=[
        "name",
        "address",
        "created_at",
        "updated_at",
    ];



    public function subscriptions(){

        return $this->hasMany(SubscriptionType::class,"branchID");
    }

}
