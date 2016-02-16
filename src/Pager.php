<?php

namespace ReenExeCubeTime\LightPaginator;

use ReenExeCubeTime\LightPaginator\Adapter\AdapterInterface;

class Pager implements PagerInterface
{
    /**
     * @var AdapterInterface
     */
    private $adapter;

    /**
     * @var int
     */
    private $currentPage;

    /**
     * @var int
     */
    private $limit;

    /**
     * @param AdapterInterface $adapter
     */
    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * @param $page
     * @return $this
     */
    public function setCurrentPage($page)
    {
        $this->currentPage = $page;

        return $this;
    }

    /**
     * @return int
     */
    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    /**
     * @param $limit
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
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
        return $this->adapter->getCount();
    }

    public function getList()
    {
        $offset = ($this->currentPage - 1) * $this->limit;

        return $this->adapter->getSlice($offset, $this->limit);
    }
}
