<?php

namespace ReenExeCubeTime\LightPaginator;

interface PagerInterface
{
    public function getCurrentPage();
    public function getPerPage();
    public function getCount();
    public function getPageCount();
    public function getResults();
}
