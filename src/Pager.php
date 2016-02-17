<?php

namespace ReenExeCubeTime\LightPaginator;

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
    private $results;

    public function __construct($currentPage, $limit, $count, $pageCount, $results)
    {
        $this->currentPage = $currentPage;
        $this->limit = $limit;
        $this->count = $count;
        $this->pageCount = $pageCount;
        $this->results = $results;
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
    public function getPerPage()
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
    public function getResults()
    {
        return $this->results;
    }
}
