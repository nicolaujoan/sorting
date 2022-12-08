<?php

namespace CodelyTv;

final class Sorting
{

    static function bubbleSort($arr)
    {
        for ($i = 0; $i < count($arr); $i++) {

            // understand this for
            for ($j = 0; $j < (count($arr) - $i - 1); $j++) {

                if ($arr[$j] > $arr[$j + 1]) {

                    // swap
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }

        return $arr;
    }

    static function mergeSort($arr) {

    }

    static function quickSort($arr) {
        
    }
}
