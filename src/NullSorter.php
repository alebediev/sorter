<?php

namespace Alebediev\Sorter;

class NullSorter implements SorterInterface
{
    public function sort(array $sortArray): array
    {
        // do nothing
        return $sortArray;
    }
}
