<?php

namespace Elminson\Permutations;

class Permutations
{
	/**
	 * Generate all possible combinations from an array (permutations) array elements included.
	 *
	 * @param array $array
	 * @param bool  $includeOriginalArray
	 *
	 * @return array
	 */
	public static function generate(array $array = [], bool $includeOriginalArray = false)
	{

		$permutations = $includeOriginalArray ? $array : [];
		$size = count($array);

		$indices = array_fill(0, $size, 0);

		while (1) {

			$res = [];
			for ($index = 0; $index < $size; $index++) {
				$res[] = $array[$index][$indices[$index]];
			}

			$permutations[] = $res;
			$next = $size - 1;
			while ($next >= 0 &&
				   (($indices[$next] + 1) >= count($array[$next]))) {
				$next--;
			}

			if ($next < 0) {
				return $permutations;
			}

			$indices[$next]++;
			for ($index = $next + 1; $index < $size; $index++) {
				$indices[$index] = 0;
			}

		}

	}

}
