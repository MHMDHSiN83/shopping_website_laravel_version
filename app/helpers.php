<?php
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

?>
