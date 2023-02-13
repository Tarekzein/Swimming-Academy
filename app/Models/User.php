<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Interfaces\Contracts\Observer;
use App\Models\captain\Captain;
use App\Models\intern\Intern;
use App\Models\manager\Manager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements Observer
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'birthdate',
        'address',
        'whatsapp',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function managers(){
        return $this->hasOne(Manager::class,"uid");
    }

    public function captains(){
        return $this->hasOne(Captain::class,"uid");
    }
    public function interns(){
        return $this->hasOne(Intern::class,"uid");
    }
    public function admin(){
        return $this->hasOne(Intern::class,"uid");
    }

    public function announcements()
    {
        return $this->hasMany(AnnouncementHistory::class,"uid");
    }

    public function announce(array $data): void
    {
        $data["uid"]=$this->id;
        AnnouncementHistory::create($data);
    }

    public function schedules(){
        return $this->hasMany(CaptainSchedule::class,"uid");
    }

}
