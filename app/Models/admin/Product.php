<?php

namespace App\Models\admin;

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
        'image',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    function set_image_path() {
        $image_name = explode('/', $this->image);
        $this->image_path = "";
        foreach ($image_name as $key => $value) {
            if($key >= 3){
                $this->image_path = $this->image_path.'/'.$value;
            }
        }
    }
}
