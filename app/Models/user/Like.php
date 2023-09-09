<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['user_id', 'comment_id', 'type'];
    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
}
