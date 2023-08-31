<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $image_path;
    
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
