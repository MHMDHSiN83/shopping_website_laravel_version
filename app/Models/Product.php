<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'warranty',
        'weight',
        'description',
        'status',
        'category_id',
    ];
    protected $attributes = [
        'image' => 2,
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
