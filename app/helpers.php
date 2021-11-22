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
?>
