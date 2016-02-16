<?php

use ReenExeCubeTime\LightPaginator\Adapter\ArrayAdapter;
use ReenExeCubeTime\LightPaginator\Factory;
use ReenExeCubeTime\LightPaginator\Core;

class PagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dataProvider
     * @covers \ReenExeCubeTime\LightPaginator\Pager::getCurrentPage
     * @covers \ReenExeCubeTime\LightPaginator\Pager::getLimit
     * @covers \ReenExeCubeTime\LightPaginator\Pager::getCount
     * @covers \ReenExeCubeTime\LightPaginator\Pager::getList
     * @covers \ReenExeCubeTime\LightPaginator\Factory::__construct
     * @covers \ReenExeCubeTime\LightPaginator\Factory::createPager
     * @covers \ReenExeCubeTime\LightPaginator\Core::getSlice
     * @param ArrayAdapter $adapter
     * @param $page
     * @param $limit
     * @param $count
     * @param array $list
     */
    public function test(ArrayAdapter $adapter, $page, $limit, $count, array $list)
    {
        $factory = new Factory(new Core());

        $pager = $factory->createPager($adapter, $page, $limit);

        $this->assertSame($pager->getCurrentPage(), $page);
        $this->assertSame($pager->getLimit(), $limit);
        $this->assertSame($pager->getCount(), $count);
        $this->assertSame($pager->getList(), $list);
    }

    public function dataProvider()
    {
        $count = 100;
        $adapter = new ArrayAdapter(range(1, $count));

        yield [
            $adapter,
            1,
            10,
            $count,
            range(1, 10)
        ];

        yield [
            $adapter,
            2,
            10,
            $count,
            range(11, 20)
        ];

        yield [
            $adapter,
            5,
            15,
            $count,
            range(61, 75)
        ];
    }
}
