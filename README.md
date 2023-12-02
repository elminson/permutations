# permutations

A convenient way to generate permutations of arrays.

Ex.
```php
    // Customizable features for a smartphone
    $colors = ['Black', 'White'];
    $storageCapacities = ['64GB', '128GB'];

    // Generating variations using Permutations::generate
    $actualVariations = Permutations::generate([$colors, $storageCapacities]);
```

Result
```bash
Array
(
    [0] => Array
        (
            [0] => Black
            [1] => 64GB
        )

    [1] => Array
        (
            [0] => Black
            [1] => 128GB
        )

    [2] => Array
        (
            [0] => White
            [1] => 64GB
        )

    [3] => Array
        (
            [0] => White
            [1] => 128GB
        )

)
```

You can also include the original array by doing 
```php
        $includeOriginalArray = true;
		$array = ['AB', 'CD'];
		$array1 = ['EF', 'GH'];
		$permutationsExpected = [ ['AB', 'CD'], ['EF', 'GH'], ['AB', 'EF'], ['AB', 'GH'], ['CD', 'EF'], ['CD', 'GH']];
		$permutationsElements = Arr::permutations([$array, $array1], $includeOriginalArray);		
```
Result
```bash
Array
(
    [0] => Array
        (
            [0] => AB
            [1] => CD
        )

    [1] => Array
        (
            [0] => EF
            [1] => GH
        )

    [2] => Array
        (
            [0] => AB
            [1] => EF
        )

    [3] => Array
        (
            [0] => AB
            [1] => GH
        )

    [4] => Array
        (
            [0] => CD
            [1] => EF
        )

    [5] => Array
        (
            [0] => CD
            [1] => GH
        )

)
```