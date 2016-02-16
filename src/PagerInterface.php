<?php

namespace ReenExeCubeTime\LightPaginator;

interface PagerInterface
{
    public function getCount();
    public function getList();
    public function getCurrentPage();
    public function getLimit();
}
