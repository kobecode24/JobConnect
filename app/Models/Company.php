<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Company extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;


    protected $fillable = [
        'name',
        'description',
        'founded',
        'city_id',
        'ceo_user_id',
        'rh_user_id',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function cities()
    {
        return $this->belongsTo(City::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function ceo() {
        return $this->belongsTo(User::class, 'ceo_user_id');
    }

    public function hrManager() {
        return $this->belongsTo(User::class, 'rh_user_id');
    }
}
