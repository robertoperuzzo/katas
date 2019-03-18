<?php
/**
 * Created by PhpStorm.
 * User: robertoperuzzo
 * Date: 01/02/18
 * Time: 15:04
 */

use PHPUnit\Framework\TestCase;
use Katas\Roman;

class RomanTest extends TestCase {

  public function testConvertZero() {
    $roman = new Roman;
    $roman_number = $roman->convert(0);
    $this->assertEquals('', $roman_number);
  }

  public function testConvert() {

    $numbers_map = [
      1 => 'I',
      2 => 'II',
      3 => 'III',
      4 => 'IV',
      5 => 'V',
      6 => 'VI',
      8 => 'VIII',
      9 => 'IX',
    ];

    $roman = new Roman;

    foreach ($numbers_map as $arabic_num => $roman_num) {
      $roman_number = $roman->convert($arabic_num);
      $this->assertEquals($roman_num, $roman_number);
    }

  }

}