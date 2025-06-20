<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'price',
        'warranty',
        'weight',
        'description',
        'status',
        'category_id',
        'images',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
