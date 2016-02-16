<?php

namespace ReenExeCubeTime\LightPaginator;

use ReenExeCubeTime\LightPaginator\Adapter\AdapterInterface;

class Factory
{
    /**
     * @var Core
     */
    private $core;

    /**
     * @param Core $core
     */
    public function __construct(Core $core)
    {
        $this->core = $core;
    }

    /**
     * @param AdapterInterface $adapter
     * @param $page
     * @param $limit
     * @return PagerInterface
     */
    public function createPager(AdapterInterface $adapter, $page, $limit)
    {
        $count = $adapter->getCount();

        $list = $adapter->getSlice($this->core->getOffset($page, $limit), $limit);

        return new Pager($page, $limit, $count, $list);
    }
}
