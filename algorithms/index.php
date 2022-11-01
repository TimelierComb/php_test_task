<?php

function add_number($array, $a)
{
    $length = count($array);

    for ($i = 0; $i < $length; $i++) {
        if (str_contains($array[$i], "2")) {
            $length++;
            for ($j = $length - 1; $j > $i; $j--) {
                $array[$j] = $array[$j - 1];
            }
            $i++;
            $array[$i] = $a;
        }
    }
    return $array;
}
