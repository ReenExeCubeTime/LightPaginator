<?php

use ReenExeCubeTime\LightPaginator\Adapter\ArrayAdapter;
use ReenExeCubeTime\LightPaginator\CompleteFactory;

class PagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dataProvider
     * @covers \ReenExeCubeTime\LightPaginator\Pager::getCurrentPage
     * @covers \ReenExeCubeTime\LightPaginator\Pager::getPerPage
     * @covers \ReenExeCubeTime\LightPaginator\Pager::getCount
     * @covers \ReenExeCubeTime\LightPaginator\Pager::getPageCount
     * @covers \ReenExeCubeTime\LightPaginator\Pager::getResults
     * @covers \ReenExeCubeTime\LightPaginator\Factory::__construct
     * @covers \ReenExeCubeTime\LightPaginator\CompleteFactory::__construct
     * @covers \ReenExeCubeTime\LightPaginator\Factory::createPager
     * @covers \ReenExeCubeTime\LightPaginator\Core::getOffset
     * @covers \ReenExeCubeTime\LightPaginator\Core::getPageCount
     * @param ArrayAdapter $adapter
     * @param $page
     * @param $limit
     * @param $count
     * @param array $list
     */
    public function test(ArrayAdapter $adapter, $page, $limit, $count, array $list)
    {
        $factory = new CompleteFactory();

        $pager = $factory->createPager($adapter, $page, $limit);

        $this->assertSame($pager->getCurrentPage(), $page);
        $this->assertSame($pager->getPerPage(), $limit);
        $this->assertSame($pager->getCount(), $count);
        $this->assertSame($pager->getResults(), $list);
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
            range(1, 10),
        ];

        yield [
            $adapter,
            2,
            10,
            $count,
            range(11, 20),
        ];

        yield [
            $adapter,
            5,
            15,
            $count,
            range(61, 75),
        ];
    }

    /**
     * @dataProvider outRangeDataProvider
     * @param ArrayAdapter $adapter
     * @param $page
     * @param $limit
     * @param $count
     * @param array $list
     * @param int $expectPage
     */
    public function testOutRange(ArrayAdapter $adapter, $page, $limit, $count, array $list, $expectPage = 1)
    {
        $factory = new CompleteFactory();

        $pager = $factory->createSmartPager($adapter, $page, $limit);

        $this->assertSame($pager->getCurrentPage(), $expectPage);
        $this->assertSame($pager->getPerPage(), $limit);
        $this->assertSame($pager->getCount(), $count);
        $this->assertSame($pager->getResults(), $list);
    }

    public function outRangeDataProvider()
    {
        $count = 100;
        $adapter = new ArrayAdapter(range(1, $count));

        yield [
            $adapter,
            11,
            10,
            $count,
            range(1, 10),
        ];

        yield [
            $adapter,
            6,
            20,
            $count,
            range(1, 20),
        ];

        yield [
            $adapter,
            5,
            20,
            $count,
            range(81, 100),
            5,
        ];
    }
}
