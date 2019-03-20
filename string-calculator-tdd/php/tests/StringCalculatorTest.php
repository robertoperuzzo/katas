<?php
/**
 * Created by PhpStorm.
 * User: robertoperuzzo
 * Date: 2019-03-20
 * Time: 21:33
 */

include_once '../src/StringCalculator.php';

use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase {

  protected $calculator;

  protected function setUp(): void {
    parent::setUp();

    $this->calculator = new StringCalculator();

    return;
  }

  public function testEmptyInput() {
    $sum = $this->calculator->add('');

    $this->assertEquals(0, $sum);
  }

  public function testSingleAddend() {
    $input = '40';
    $sum = $this->calculator->add($input);

    $this->assertEquals(intval($input), $sum);
  }

  public function testTwoAddend() {
    $input = '40, 14';
    $sum = $this->calculator->add($input);

    $this->assertEquals(54, $sum);
  }

  public function testRandomAddend() {
    $n = rand(0, 1000);
    $int_array = [];
    $input = '';
    for ($i = 0; $i < $n; $i++) {
      $int_array[$i] = rand();
    }
    $result = array_sum($int_array);
    $input = implode(',', $int_array);
    $sum = $this->calculator->add($input);

    $this->assertEquals($result, $sum);
  }

  public function testNewlineGlue() {
    $input = "1\n2,3";
    $sum = $this->calculator->add($input);

    $this->assertEquals(6, $sum);
  }

  public function testDifferentGlues() {
    $input = "//;\n1;2";
    $sum = $this->calculator->add($input);

    $this->assertEquals(3, $sum);
  }

  public function testNegatives() {
    $input = '32,-24,3,-1,99';
    $this->expectExceptionMessage('negatives not allowed: -24,-1');
    $sum = $this->calculator->add($input);
  }


}
