<?php
/**
 * Created by PhpStorm.
 * User: robertoperuzzo
 * Date: 2019-03-18
 * Time: 23:08
 */

namespace Katas\Calculators;


class StringCalculator {

  public function add($s) {
    if (empty(trim($s))) {
      return 0;
    }
    else {
      $numbers = array_map('intval', explode(',', $s));
      if (count($numbers) == 1) {
        return $numbers[0];
      }
      elseif (count($numbers) > 2) {
        return FALSE;
      }
    }
  }
}