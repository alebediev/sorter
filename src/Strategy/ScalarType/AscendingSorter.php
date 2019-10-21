<?php

namespace Alebediev\Sorter\Strategy\ScalarType;

use Alebediev\Sorter\SorterInterface;

class AscendingSorter implements SorterInterface
{
    public function sort(array $sortArray, ?string $arrayType): array
    {
        isset($arrayType) ? \asort($sortArray) : \sort($sortArray);

        return $sortArray;
    }
}
