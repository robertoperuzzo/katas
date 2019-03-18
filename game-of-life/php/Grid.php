<?php

include_once 'Cell.php';

class Grid {

  var $rows;
  var $cols;
  var $refresh;
  var $cells = [];

  function __construct () {
    $this->rows = 10;
    $this->cols = 10;
    $this->refresh = 1;
  }

  public function initGrid ()  {
    for ($i = 0; $i < $this->rows; $i++) {
      for ($k = 0; $k < $this->cols; $k++) {
        $this->cells[] = new Cell($i, $k);
       }
    }

    for ($i = 0; $i < 10; $i++) {
      $x_rand = rand(0, $this->cols - 1);
      $y_rand = rand(0, $this->rows - 1);

      foreach ($this->cells as $cell) {
        if ($cell->getPosY() == $x_rand && $cell->getPosY() == $y_rand) {
          $cell->setAlive(true);
        }
      }

    }
  }

  public function refresh() {


  }


  public function getCell($x, $y) {
    foreach ($this->cells as $cell) {
      if ($cell->getPosY() == $x_rand && $cell->getPosY() == $y_rand) {
        return $cell;
      }
    }

    return NULL;
  }

  /**
   * @return int
   */
  public function getRows()
  {
    return $this->rows;
  }

  /**
   * @param int $rows
   */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }

  /**
   * @return int
   */
  public function getCols()
  {
    return $this->cols;
  }

  /**
   * @param int $cols
   */
  public function setCols($cols)
  {
    $this->cols = $cols;
  }

  /**
   * @return array
   */
  public function getCells()
  {
    return $this->cells;
  }

  /**
   * @param array $cells
   */
  public function setCells($cells)
  {
    $this->cells = $cells;
  }




}
