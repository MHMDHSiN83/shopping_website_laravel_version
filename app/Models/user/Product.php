<?php

namespace App\Models\user;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function rates()
    {
        return $this->hasMany(Rate::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
