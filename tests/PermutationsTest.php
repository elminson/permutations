<?php

namespace Elminson\Permutations\Tests;

use Elminson\Permutations\Permutations;
use PHPUnit\Framework\TestCase;

class PermutationsTest extends TestCase
{
	public function testPermutations()
	{

		$includeOriginalArray = true;
		$array = [1, 2];
		$array2 = [3, 4];
		$permutations = [ [1, 2], [3, 4], [1, 3], [1, 4], [2, 3], [2, 4]];
		$permutationsResult = Permutations::permutations([$array, $array2], $includeOriginalArray);
		$this->assertEquals($permutations, $permutationsResult);

		// print_r($permutations);
		// print_r($permutationsResult);
		// exit();
		$array3 = [1, 2];
		$array4 = [3, 4];
		$permutations = [ [1, 3], [1, 4], [2, 3], [2, 4]];
		$permutationsResult = Permutations::permutations([$array3, $array4]);
		$this->assertEquals($permutations, $permutationsResult);

		$array5 = ['AB', 'CD'];
		$array6 = ['EF', 'GH'];
		$permutationsExpected = [ ['AB', 'CD'], ['EF', 'GH'], ['AB', 'EF'], ['AB', 'GH'], ['CD', 'EF'], ['CD', 'GH']];
		$permutationsElements = Permutations::permutations([$array5, $array6], $includeOriginalArray);
		$this->assertEquals($permutationsExpected, $permutationsElements);

		$array7 = ['AB', 'CD'];
		$array8 = ['EF', 'GH', 'IJ'];
		$permutationsExpected = [ ['AB', 'EF'], ['AB', 'GH'], ['AB', 'IJ'], ['CD', 'EF'], ['CD', 'GH'], ['CD', 'IJ']];
		$permutationsElements = Permutations::permutations([$array7, $array8]);
		$this->assertEquals($permutationsExpected, $permutationsElements);

	}
}
