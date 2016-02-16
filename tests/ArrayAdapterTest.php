<?php

use ReenExeCubeTime\LightPaginator\Adapter\ArrayAdapter;

class ArrayAdapterTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers \ReenExeCubeTime\LightPaginator\Adapter\ArrayAdapter::__construct
     * @covers \ReenExeCubeTime\LightPaginator\Adapter\ArrayAdapter::getSlice
     * @covers \ReenExeCubeTime\LightPaginator\Adapter\ArrayAdapter::getCount
     */
    public function test()
    {
        $adapter = new ArrayAdapter([1, 2, 3]);

        $this->assertSame($adapter->getSlice(1, 1), [2]);
        $this->assertSame($adapter->getCount(), 3);
    }
}
