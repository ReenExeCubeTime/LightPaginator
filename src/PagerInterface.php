<?php

namespace ReenExeCubeTime\LightPaginator;

interface PagerInterface
{
    public function getCurrentPage();
    public function getLimit();
    public function getCount();
    public function getPageCount();
    public function getList();
}
