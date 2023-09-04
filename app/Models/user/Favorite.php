<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    // use HasFactory;
    protected $table = 'favorites';
    protected $fillable = ['user_id', 'product_id'];
    public $timestamps = false;
}
