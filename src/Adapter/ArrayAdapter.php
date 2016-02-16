<?php

/*
 * This file was part of the Pagerfanta package.
 *
 * (c) Pablo Díez <pablodip@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ReenExeCubeTime\LightPaginator\Adapter;;

/**
 * ArrayAdapter.
 *
 * @author Pablo Díez <pablodip@gmail.com>
 */
class ArrayAdapter implements AdapterInterface
{
    private $array;

    /**
     * Constructor.
     *
     * @param array $array The array.
     */
    public function __construct(array $array)
    {
        $this->array = $array;
    }

    /**
     * {@inheritdoc}
     */
    public function getCount()
    {
        return count($this->array);
    }

    /**
     * {@inheritdoc}
     */
    public function getSlice($offset, $length)
    {
        return array_slice($this->array, $offset, $length);
    }
}
