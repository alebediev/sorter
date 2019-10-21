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
        if (\array_keys($sortArray) !== \range(0, \count($sortArray) - 1)) {
            $arrayType = 'associative';
        } else {
            $arrayType = null;
        }

        return $this->sorter->sort($sortArray, $arrayType);
    }

    public function changeStrategy(SorterInterface $sorter): self
    {
        $this->sorter = $sorter;

        return $this;
    }


}
