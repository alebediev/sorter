<?php

namespace Alebediev\Sorter;

class Sorter
{
    private $sorter;

    public function __construct(SorterInterface $sorter)
    {
        $this->sorter = $sorter;
    }

    public function sort(array $sortArray): array
    {
        return $this->sorter->sort($sortArray);
    }
}
