<?php

namespace Alebediev\Sorter;

class ArraysOfIntegersAndStringsAscendingSorter implements SorterInterface
{
    public function sort(array $sortArray): array
    {
        if (\array_keys($sortArray) !== \range(0, \count($sortArray) - 1)) {
            \asort($sortArray);
        } else {
            \sort($sortArray);
        }

        return $sortArray;
    }
}
