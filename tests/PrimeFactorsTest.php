<?php

namespace Tests;

use App\Kata\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    /**
     * @test
     * @dataProvider factors
     */
    public function it_generates_prime_factors($input, $output)
    {
        $factors = new PrimeFactors();

        $this->assertEquals($output, $factors->generate($input));
    }

    public function factors()
    {
        return [
            [1, []],
            [2, [2]],
            [3, [3]],
            [4, [2, 2]],
            [5, [5]],
            [6, [2, 3]],
            [8, [2, 2, 2]],
            [100, [2, 2, 5, 5]],
            [999, [3, 3, 3, 37]],
        ];
    }
}
