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
     * @return \Traversable
     *   The divisors of the number.
     */
    public function factors(int $num, int $start = 1): \Traversable
    {
        echo 'Fooooooooooooooo';

        if (0 === $num % $start) {
            yield $start => $start;
            yield $num / $start => $num / $start;
        }

        if ($start + 1 !== $num / $start) {
            if (\ceil(\sqrt($num)) >= $start) {
                yield from $this->factors($num, $start + 1);
            }
        }
    }

    /**
     * Get the greatest common divisor.
     *
     * @param int ...$x
     *   The numbers.
     *
     * @return int
     *   The greatest common divisor.
     */
    public function gcd(...$x): int
    {
        if (1 >= \count($x)) {
            throw new \InvalidArgumentException('At least two parameters are required.');
        }

        $intersect = \array_intersect(
            ...\array_map(
                '\iterator_to_array',
                \array_map(
                    [
                        $this,
                        'factors',
                    ],
                    $x
                )
            )
        );

        return \end($intersect);
    }
}
