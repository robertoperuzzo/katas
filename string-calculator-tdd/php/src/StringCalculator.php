<?php
/**
 * Created by PhpStorm.
 * User: robertoperuzzo
 * Date: 2019-03-20
 * Time: 21:49
 */

class StringCalculator {

  public function add($s) {
    $sum = 0;

    $matches = [];
    preg_match('/\/\/(.)(\n)/', $s, $matches);

    if (isset($matches[1])) {
      $addends = array_map('intval', explode($matches[1], $s));
    }
    else {
      $addends = array_map('intval', preg_split("/[\n,]+/", $s));
    }

    $addends_count = count($addends);

    if ($addends_count == 1) {
      $sum = reset($addends);
    } else {
      foreach ($addends as $value) {
        $sum += intval($value);
      }
    }

    return $sum;
  }

}