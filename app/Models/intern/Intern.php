<?php

namespace App\Models\intern;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Intern extends Model
{
    use HasFactory;

    protected $fillable=[
        "uid",
        "academyID",
        "branch",
        "group_type",
        "subType",
        "upgraded",
        "created_at",
        "updated_at",
    ];

    public function user(){
        return $this->belongsTo(User::class,"uid");
    }

    public function scopeFilter($query,array $filters){

        if($filters["catid"] ?? false){
            if(request("catid")!=0){
                $query->where(["catid"=>request("catid"),"status"=>"approved"]);
            }


        }
        else if($filters["author"] ?? false){
            $query->where(["uid"=>request("author"),"status"=>"approved"]);
        }


    }

}
