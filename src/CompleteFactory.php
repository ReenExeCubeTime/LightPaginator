<?php

namespace ReenExeCubeTime\LightPaginator;

class CompleteFactory extends Factory
{
    public function __construct()
    {
        parent::__construct(new Core());
    }
}
