<?php

namespace ReenExeCubeTime\LightPaginator;

use ReenExeCubeTime\LightPaginator\Adapter\AdapterInterface;

class Pager implements PagerInterface
{
    /**
     * @var int
     */
    private $currentPage;

    /**
     * @var int
     */
    private $limit;

    /**
     * @var int
     */
    private $count;

    /**
     * @var int
     */
    private $pageCount;

    /**
     * @var array|\Traversable
     */
    private $list;

    public function __construct($currentPage, $limit, $count, $pageCount, $list)
    {
        $this->currentPage = $currentPage;
        $this->limit = $limit;
        $this->count = $count;
        $this->pageCount = $pageCount;
        $this->list = $list;
    }

    /**
     * @return int
     */
    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return int
     */
    public function getPageCount()
    {
        return $this->pageCount;
    }

    /**
     * @return array|\Traversable
     */
    public function getList()
    {
        return $this->list;
    }
}
