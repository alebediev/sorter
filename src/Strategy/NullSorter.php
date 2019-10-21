<?php

namespace Alebediev\Sorter\Strategy;

use Alebediev\Sorter\SorterInterface;

class NullSorter implements SorterInterface
{
    public function sort(array $sortArray, ?string $arrayType): array
    {
        // do nothing
        return $sortArray;
    }
}
