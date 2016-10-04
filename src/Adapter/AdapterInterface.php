<?php

namespace ReenExeCubeTime\LightPaginator\Adapter;

interface AdapterInterface
{
    /**
     * Returns the number of results.
     *
     * @return integer The number of results.
     */
    public function getCount();

    /**
     * Returns an slice of the results.
     *
     * @param integer $offset The offset.
     * @param integer $length The length.
     *
     * @return array|\Traversable The slice.
     */
    public function getSlice($offset, $length);
}
