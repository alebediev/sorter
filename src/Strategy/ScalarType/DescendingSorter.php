<?php

namespace Alebediev\Sorter\Strategy\ScalarType;

use Alebediev\Sorter\AbstractArrayTypeQualifier;
use Alebediev\Sorter\SorterInterface;

class DescendingSorter extends AbstractArrayTypeQualifier implements SorterInterface
{
    public function sort(array $sortArray): array
    {
        $this->isAssocArray($sortArray) ? \arsort($sortArray) : \rsort($sortArray);

        return $sortArray;
    }
}
