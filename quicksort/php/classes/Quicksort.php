<?php
/**
 * Created by PhpStorm.
 * User: robertoperuzzo
 * Date: 02/01/18
 * Time: 09:21
 */

class Quicksort {

    /**
     * This function takes last element as pivot, places the pivot element at its correct position in sorted array,
     * and places all smaller (smaller than pivot) to left of pivot and all greater elements to right of pivot.
     *
     * @param $array
     * @param $low
     * @param $high
     *
     * Useful links:
     * https://www.geeksforgeeks.org/quick-sort/
     * https://gist.github.com/codeblocks/952063
     */
    private function partition(&$array, $low, $high) {

        // Choose the pivot (Element to be placed at right position)
        $pivot = $array[$high];

        // Store smallest element's index.
        $i = $low - 1;

        for ($j = $low; $j < $high; $j++) {
            // If current element is smaller than or equal to pivot.
            if ($array[$j] <= $pivot) {
                $i++;
                // Swap $i and $j elements.
                $tmp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $tmp;
            }
        }
        // Swap $i + 1 and $high elements.
        $tmp = $array[$i + 1];
        $array[$i + 1] = $array[$high];
        $array[$high] = $tmp;

        return $i + 1;
    }

    /**
     * Implements quicksort algorithm.
     *
     * @param $array
     * @param $low
     * @param $high
     * @return array
     */
    public function sort(&$array, $low, $high) {
        if ($low < $high) {
            // $pi is partitioning index, $array[p] is now at right place.
            $pi = $this->partition($array, $low, $high);

            $this->sort($array, $low, $pi - 1);  // Before pi
            $this->sort($array, $pi + 1, $high); // After pi
        }
    }

    /* A utility function to print array of size n */
    public function printArray($array) {
        foreach ($array as $key => $value) {
            printf("%d => %s", $key, $value);
            print "\n";
        }
    }
}