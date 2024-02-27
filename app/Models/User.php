<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable;
    use InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'skills',
        'education',
        'description',
        'experience',
        'image',
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
        'password' => 'hashed',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    public function job_offers()
    {
        return $this->belongsToMany(jobOffer::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function applications() {
        return $this->hasMany(Application::class);
    }

    public function appliedOffers()
    {
        return $this->belongsToMany(JobOffer::class, 'job_offer_user', 'user_id', 'job_offer_id')->withTimestamps();
    }


    public function managedCompanyAsCeo() {
        return $this->hasOne(Company::class, 'ceo_user_id');
    }

    public function managedCompanyAsHr() {
        return $this->hasOne(Company::class, 'rh_user_id');
    }

    public function isCeoOrHrOfCompany() {
        return $this->managedCompanyAsCeo()->exists() || $this->managedCompanyAsHr()->exists();
    }

    public function isCeo()
    {
        return $this->roles->contains('name', 'CEO');
    }

    public function isHr()
    {
        return $this->roles->contains('name', 'HR');
    }

    public function isCandidate() {
        return $this->roles->contains('name', 'User');
    }

    public function isAdmin()
    {
        return $this->roles->contains('name', 'Admin');
    }

}
