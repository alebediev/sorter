<?php

namespace Alebediev\Sorter\Strategy\ScalarType;

use Alebediev\Sorter\SorterInterface;

class DescendingSorter implements SorterInterface
{
    public function sort(array $sortArray, ?string $arrayType): array
    {
        isset($arrayType) ? \arsort($sortArray) : \rsort($sortArray);

        return $sortArray;
    }
}
