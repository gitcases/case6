<?php

declare(strict_types = 1);

namespace spec\drupol\case6;

use drupol\case6\GreatestCommonDivisor;
use PhpSpec\ObjectBehavior;

class GreatestCommonDivisorSpec extends ObjectBehavior
{
    public function it_can_get_factors()
    {
        $result = [
            1 => 1,
            12 => 12,
            2 => 2,
            6 => 6,
            3 => 3,
            4 => 4,
        ];

        $this
            ->factors(12)
            ->shouldIterateLike($result);

        $result = [
            1 => 1,
            60 => 60,
            2 => 2,
            30 => 30,
            3 => 3,
            20 => 20,
            4 => 4,
            15 => 15,
            5 => 5,
            12 => 12,
            6 => 6,
            10 => 10,
        ];

        $this
            ->factors(60)
            ->shouldIterateLike($result);
    }

    public function it_can_get_the_gcd()
    {
        $this
            ->gcd(5, 10, 15, 20)
            ->shouldReturn(5);

        $this
            ->gcd(1, 7)
            ->shouldReturn(1);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(GreatestCommonDivisor::class);
    }
}
