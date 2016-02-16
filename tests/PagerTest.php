<?php

use ReenExeCubeTime\LightPaginator\Adapter\ArrayAdapter;
use ReenExeCubeTime\LightPaginator\Pager;

class PagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dataProvider
     * @covers \ReenExeCubeTime\LightPaginator\Pager::__construct
     * @covers \ReenExeCubeTime\LightPaginator\Pager::setPage
     * @covers \ReenExeCubeTime\LightPaginator\Pager::setLimit
     * @covers \ReenExeCubeTime\LightPaginator\Pager::getCount
     * @covers \ReenExeCubeTime\LightPaginator\Pager::getList
     * @param ArrayAdapter $adapter
     * @param $page
     * @param $limit
     * @param $count
     * @param array $list
     */
    public function test(ArrayAdapter $adapter, $page, $limit, $count, array $list)
    {
        $pager = new Pager($adapter);
        $pager
            ->setPage($page)
            ->setLimit($limit);

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
