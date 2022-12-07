<?php

namespace App\Models\admin;

use App\Models\Academy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromoCode extends Model
{
    use HasFactory;

    protected $fillable=[
        "academyID",
        "branchID",
        "code",
        "discount_percent",
        "start_date",
        "end_date",
    ];

    public function academies(){
        return $this->belongsToMany(Academy::class,"academies","academyID");
    }

}
