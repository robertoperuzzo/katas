<?php
/**
 * Created by PhpStorm.
 * User: robertoperuzzo
 * Date: 02/02/18
 * Time: 09:46
 */

namespace Katas;

class Roman {

  private $numbers_map = [
    1000 => 'M',
    900 => 'CM',
    500 => 'D',
    400 => 'CD',
    100 => 'C',
    90 => 'XC',
    50 => 'L',
    40 => 'XL',
    10 => 'X',
    9 => 'IX',
    5 => 'V',
    4 => 'IV',
    1 => 'I',
  ];

  public function convert($arabic) {

    if ($arabic == 0) {
      return '';
    }

    $number = $this->convertionFactorsFor($arabic);

    return $number['roman'] . $this->convert($arabic - $number['arabic']);

  }


  private function convertionFactorsFor($arabic) {

    foreach ($this->numbers_map as $a_num => $r_num) {
      if ($a_num <= $arabic) {
        $number['roman'] = $r_num;
        $number['arabic'] = $a_num;
      }
    }

    return $number;
  }

}