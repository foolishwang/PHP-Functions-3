<?php

function limit_words($string, $word_limit) /* function for truncating a string */
{
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}

?>