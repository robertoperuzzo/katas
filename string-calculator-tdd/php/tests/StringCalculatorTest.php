<?php
/**
 * Created by PhpStorm.
 * User: robertoperuzzo
 * Date: 2019-03-18
 * Time: 21:36
 */

include_once "../src/StringCalculator.php";

use PHPUnit\Framework\TestCase;
use Katas\Calculators\StringCalculator;

class StringCalculatorTest extends TestCase {

  protected $calculator;

  protected function setUp(): void {
    $this->calculator = new StringCalculator();
  }

  public function testEmpty() {
    $result = $this->calculator->add('');

    $this->assertEquals(0, $result);
  }

  public function testOneOperand() {
    $result = $this->calculator->add('10');

    $this->assertEquals(10, $result);
  }

  public function testMoreThanTwo() {
    $result = $this->calculator->add('10,1,3');

    $this->assertFalse($result);
  }
}
