<?php

namespace App\Models;

use App\Models\manager\Manager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $fillable=[
        "name",
        "address",
        "dates",
        "created_at",
        "updated_at",
    ];



    public function subscriptions(){

        return $this->hasMany(SubscriptionType::class,"branchID");
    }


    public function waterCard(){
        return $this->hasOne(WaterCard::class,"branchID");
    }

    public function managers(){
        return $this->hasMany(Manager::class,"branchID");
    }

}
