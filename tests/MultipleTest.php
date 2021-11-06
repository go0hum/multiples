<?php

namespace Humberto;

use Humberto\Multiple;
use PHPUnit\Framework\TestCase;

class MultipleTest extends TestCase
{
    protected $Multiple;

    public function setUp(): void
    {
        $this->Multiple = new Multiple;
    }

    public function testIsMultiple3()
    {
        $Number = $this->Multiple->setMultiple(3, "Linio", 6);
        $this->assertEquals("Linio", $Number, sprintf('Result for index 6 should be Linio and got %s', $Number));
    }

    public function testIsMultiple5()
    {
        $Number = $this->Multiple->setMultiple(5, "IT", 10);
        $this->assertEquals("IT", $Number, sprintf('Result for index 10 should be IT and got %s', $Number));
    }

    public function testIsMultiple3and5()
    {
        $multiplo1 = 3;
        $multiplo2 = 5;
        $Number = $this->Multiple->setMultiple($multiplo1 * $multiplo2, "Linianos", 30);
        $this->assertEquals("Linianos", $Number, sprintf('Result for index 15 should be Linianos and got %s', $Number));
    }

    public function testGetMultiple()
    {
        $Array = array(
            'Linianos',
            1,
            2,
            'Linio',
            4,
            'IT',
            'Linio',
            7,
            8,
            'Linio',
            'IT',
            11,
            'Linio',
            13,
            14,
            'Linianos'
        );
        $this->assertEquals($this->Multiple->get(15), $Array);
    }
}
