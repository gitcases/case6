# GCD

Find the greatest common divisor out of a set of numbers.

# Usage

```php
<?php

include 'vendor/autoload.php';

use drupol\case6\GreatestCommonDivisor;

$gcd = new GreatestCommonDivisor();

// Factors
$factors = [];
foreach ($gcd->factors(60) as $factor) {
    $factors[] = $factor;
}
print_r($factors);

// GCD
$number = $gcd->gcd(15, 20, 60, 150, 75);
print_r($number);


```

# Tests

`./vendor/bin/grumphp run`