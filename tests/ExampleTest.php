<?php

namespace Tests\Unit\Cmp;

use PHPUnit\Framework\TestCase;
use Cmp\Example;

class ExampleTest extends TestCase
{
    public function test_2()
    {
        $a = new Example();
        $this->assertEquals(2, $a->testReturns2());
    }

    public function test_will_fail()
    {
        $a = new Example();
        $this->assertEquals(3, $a->testReturns2());
    }
}
