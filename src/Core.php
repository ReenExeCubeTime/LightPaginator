<?php

namespace ReenExeCubeTime\LightPaginator;

class Core
{
    public function getOffset($currentPage, $limit)
    {
        return ($currentPage - 1) * $limit;
    }

    public function getPageCount($count, $limit)
    {
        return (int)ceil($count / $limit);
    }

}
