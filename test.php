<?php

require_once './Factory.php';

// Sort

$array = [2, 4, 3, 5, 1, 9, 6];

$result = Factory::Sort()->Bubble_sort($array);

print_r($result);
