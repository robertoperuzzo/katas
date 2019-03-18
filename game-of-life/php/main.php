<?php

include_once 'Grid.php';

$grid_current = new Grid();
$grid_current->initGrid();

$grid_copy = $grid_current;

foreach ($grid_current->getCells() as $key => $cell) {
  $cell_copy = $grid_copy->getCells()[$key];
}

