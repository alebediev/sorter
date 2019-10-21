<?php

namespace Alebediev\Sorter;

interface SorterInterface
{
    public function sort(array $sortArray, ?string $arrayType): array ;
}
