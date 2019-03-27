<?php

declare(strict_types = 1);

namespace spec\drupol\case6;

use drupol\case6\GreatestCommonDivisor;
use PhpSpec\ObjectBehavior;

class GreatestCommonDivisorSpec extends ObjectBehavior
{
    public function it_can_get_factors()
    {
        $this
            ->factors(12)
            ->shouldReturn([1, 2, 3, 4, 6, 12]);
    }
    public function it_can_get_the_gcd()
    {
        $this
            ->gcd(5, 10, 15, 20)
            ->shouldReturn(5);
    }
    public function it_is_initializable()
    {
        $this->shouldHaveType(GreatestCommonDivisor::class);
    }
}
