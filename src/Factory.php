<?php

namespace ReenExeCubeTime\LightPaginator;

use ReenExeCubeTime\LightPaginator\Adapter\AdapterInterface;

class Factory
{
    /**
     * @param AdapterInterface $adapter
     * @param $page
     * @param $limit
     * @return Pager
     */
    public function createPager(AdapterInterface $adapter, $page, $limit)
    {
        $pager = new Pager($adapter);

        $pager
            ->setCurrentPage($page)
            ->setLimit($limit);

        return $pager;
    }
}
