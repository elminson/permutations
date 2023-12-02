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
