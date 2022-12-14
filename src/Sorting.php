<?php

namespace Sorting;

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

    function merge_sort($my_array)
    {
        if (count($my_array) == 1)
            return $my_array;
        $mid = count($my_array) / 2;
        $left = array_slice($my_array, 0, $mid);
        $right = array_slice($my_array, $mid);
        $left = $this->merge_sort($left);
        $right = $this->merge_sort($right);
        return $this->merge($left, $right);
    }
    private function merge($left, $right)
    {
        $res = array();
        while (count($left) > 0 && count($right) > 0) {
            if ($left[0] > $right[0]) {
                $res[] = $right[0];
                $right = array_slice($right, 1);
            } else {
                $res[] = $left[0];
                $left = array_slice($left, 1);
            }
        }
        while (count($left) > 0) {
            $res[] = $left[0];
            $left = array_slice($left, 1);
        }
        while (count($right) > 0) {
            $res[] = $right[0];
            $right = array_slice($right, 1);
        }
        return $res;
    }

    function quicksort($array)
    {
        if (count($array) < 2)
            return $array;

        $left = $right = array();

        reset($array);
        $pivot_key = key($array);
        $pivot = array_shift($array);

        foreach ($array as $k => $v) {
            if ($v < $pivot)
                $left[$k] = $v;
            else
                $right[$k] = $v;
        }

        return array_merge($this->quicksort($left), array($pivot_key => $pivot), $this->quicksort($right));
    }
}