<?php

namespace Alebediev\Sorter;

class ArraysOfIntegersAndStringsDescendingSorter implements SorterInterface
{
    public function sort(array $sortArray): array
    {
        if (\array_keys($sortArray) !== \range(0, \count($sortArray) - 1)) {
            \arsort($sortArray);
        } else {
            \rsort($sortArray);
        }

        return $sortArray;
    }
}
