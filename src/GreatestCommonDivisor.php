<?php

declare(strict_types = 1);

namespace drupol\case6;

class GreatestCommonDivisor
{
    /**
     * Get the divisors of a given number.
     *
     * @param int $num
     *   The number.
     * @param int $start
     *   The number to start from.
     *
     * @return array
     *   The divisors of the number.
     */
    public function factors($num, $start = 2)
    {
        echo 'Fooooooooooooooo';
        
        $return = [1, $num];

        $end = \ceil(\sqrt($num)) + 1;

        for ($i = $start; $i < $end; ++$i) {
            if (0 !== $num % $i) {
                continue;
            }

            $return[$i] = $i;
            $return[$num / $i] = $num / $i;
        }

        \asort($return);

        return \array_values($return);
    }

    /**
     * Get the greatest common divisor.
     *
     * @param int ...$x
     *   The numbers.
     *
     * @return false|int
     *   The greatest common divisor.
     */
    public function gcd(...$x)
    {
        $x = \array_map([$this, 'factors'], $x);

        $intersect = \array_intersect(...$x);

        return \end($intersect);
    }
}
