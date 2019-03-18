<?php

/**
*
*/
class Cell
{
  var $pos_x;
  var $pos_y;
  var $alive;

  function __construct($x, $y, $alive = false)
  {
    $this->pos_x = $x;
    $this->pos_y = $y;
    $this->alive = $alive;
  }

  /**
   * @return mixed
   */
  public function getPosX()
  {
    return $this->pos_x;
  }

  /**
   * @param mixed $pos_x
   */
  public function setPosX($pos_x)
  {
    $this->pos_x = $pos_x;
  }

  /**
   * @return mixed
   */
  public function getPosY()
  {
    return $this->pos_y;
  }

  /**
   * @param mixed $pos_y
   */
  public function setPosY($pos_y)
  {
    $this->pos_y = $pos_y;
  }

  /**
   * @return bool
   */
  public function isAlive()
  {
    return $this->alive;
  }

  /**
   * @param bool $alive
   */
  public function setAlive($alive)
  {
    $this->alive = $alive;
  }


  public function cellCheck() {
    
  }

}
