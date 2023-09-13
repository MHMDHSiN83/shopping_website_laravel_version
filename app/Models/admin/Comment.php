<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function likes()
    {
        return $this->hasMany('App\Models\user\Like');
    }
    public function likeCondition($user_id)
    {
        if($user_id) {
            $like = $this->likes()->where('user_id', $user_id)->get()->first();
            if($like) {
                if($like->type == 0) {
                    $condition = 'dislike';
                } else {
                    $condition = 'like';
                }
            } else {
                $condition = 'none';
            }
        } else {
            $condition = 'none';
        }
        return $condition;
    }
}
