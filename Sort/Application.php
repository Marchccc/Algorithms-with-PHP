<?php

namespace Sort;

class Application
{

	public function Bubble_sort($array)
	{
		$len = count($array);
		for ($i = 0; $i < $len; $i++) {
			for ($j = $i + 1; $j < $len; $j++) {
				if ($array[$i] > $array[$j]) {
					$temp = $array[$j];
					$array[$j] = $array[$i];
					$array[$i] = $temp;
				}
			}
		}
		return $array;
	}

	public function Insertion_sort($array)
	{
		$len = count($array);
		for ($i = 1; $i < $len; $i++) {
			$insert_value = $array[$i];

			// Calculate the insertion position, starting with the last one of the sequence, 
			// comparing them one by one with the value to be inserted
			for ($j = $i - 1; $j >= 0; $j--) {
				if ($array[$j] > $insert_value) {
					$array[$j + 1] = $array[$j];
				} else {
					break;
				}
			}

			$array[$j + 1] = $insert_value;
		}

		return $array;
	}

	public function Quicksort($array)
	{
		$len = count($array);
		if ($len <= 1) {
			return $array;
		}

		$middle = $array[0];
		$left = [];
		$right = [];
		for ($i = 1; $i < $len; $i++) {
			if ($array[$i] < $middle) {
				array_push($left, $array[$i]);
			} else {
				array_push($right, $array[$i]);
			}
		}

		$left = $this->Quicksort($left);
		$right = $this->Quicksort($right);
		return array_merge($left, [$middle], $right);
	}
}
