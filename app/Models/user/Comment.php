<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'description'
    ];
    protected $attributes = [
        'product_id' => 1,
        'user_id' => 1,
        'status' => 0,
    ];
}
