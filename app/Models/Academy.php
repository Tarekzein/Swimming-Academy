<?php

namespace App\Models;

use App\Models\admin\PromoCode;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academy extends Model
{
    use HasFactory;

    protected $fillable=[
        "name",
        "created_at",
        "updated_at",
    ];


    public function promoCodes(){
        return $this->hasMany(PromoCode::class,"academyID");
    }
}
