<?php

use Illuminate\Support\Facades\Auth;

function cut_text($text, $start, $end) {
    $showing_description = mb_substr($text, $start, $end, 'utf8');
    if($text != $showing_description) {
        $part_of_comment = $showing_description . '...';
    } else {
        $part_of_comment = $text;
    }
    return $part_of_comment;
}

function toPersian($text)
{
        $english = array('0','1','2','3','4','5','6','7','8','9');
        $persian = array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹');
        $convertedStr = str_replace($english, $persian, $text);
        return $convertedStr;
}
function toEnglish($text)
{
        $english = array('0','1','2','3','4','5','6','7','8','9');
        $persian = array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹');
        $convertedStr = str_replace($persian, $english, $text);
        return $convertedStr;
}

function get_user_id_if_exist()
{
    if(Auth::check()) {
        $user_id = Auth::user()->id;
    } else {
        $user_id = false;
    }
    return $user_id;
}

function set_images_path($images) 
{
    $images = explode(',', $images);
    foreach ($images as $first_key => $image) {
        $image_name = explode('/', $image); 
        $image_path = "";
        foreach ($image_name as $second_key => $value) {
            if($second_key == count($image_name)-1){
                $image_path = $image_path."thumbs/";
                $image_path = $image_path.$value;
            } else{
                $image_path = $image_path.$value.'/';
            }
        }
        $images[$first_key] = $image_path;
    }
    return $images;
}
function sluggable($slug) 
{
    for ($i=0; $i < strlen($slug); $i++) { 
        if($slug[$i] == ' ') {
            $slug[$i] = '-';
        }
    }
    return $slug;
}
function is_phone_number($phone_number)
{
    $phone_number = toEnglish($phone_number);
    if(strlen($phone_number) == 11) {
        for ($i=0; $i < 11 ; $i++) { 
            if(ord($phone_number[$i]) > 57 or ord($phone_number[$i]) < 48) {
                return false;
            }
        }
    } else {
        return false;
    }
    return true;
}

?>
