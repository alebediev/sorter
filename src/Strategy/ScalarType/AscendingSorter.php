<?php

namespace Alebediev\Sorter\Strategy\ScalarType;

use Alebediev\Sorter\AbstractArrayTypeQualifier;
use Alebediev\Sorter\SorterInterface;

class AscendingSorter extends AbstractArrayTypeQualifier implements SorterInterface
{
    public function sort(array $sortArray): array
    {
        $this->isAssocArray($sortArray) ? \asort($sortArray) : \sort($sortArray);

        return $sortArray;
    }
}
