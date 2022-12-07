<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageType extends Model
{
    use HasFactory;
    protected $fillable=[
        "subsID",
        "package_name",
        "sessions_number",
        "price",
        "created_at",
        "updated_at",
    ];
}
