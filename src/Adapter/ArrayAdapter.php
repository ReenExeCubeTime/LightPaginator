<?php

namespace ReenExeCubeTime\LightPaginator\Adapter;;

class ArrayAdapter implements AdapterInterface
{
    private $array;

    /**
     * ArrayAdapter constructor.
     * @param array $array
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
