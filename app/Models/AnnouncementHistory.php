<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnouncementHistory extends Model
{
    use HasFactory;

    protected $fillable=[
      "announcement",
      "type",
      "uid",
      "end_date",
      "created_at",
      "updated_at",
    ];

    public function user()
    {
        return $this->belongsTo(User::class,"uid");
    }

}
