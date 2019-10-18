#!/usr/bin/env php
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Alebediev\Sorter\Sorter;
use Alebediev\Sorter\ArraysOfIntegersAndStringsAscendingSorter as AscendingSorter;
use Alebediev\Sorter\ArraysOfIntegersAndStringsDescendingSorter as DescendingSorter;
use Alebediev\Sorter\NullSorter;

$testArrayOfIntegers = [7,4,30,1];
$testArrayOfStrings = ['Son','Eldest daughter','Younger daughter','Father'];
$testAssocArrayOfIntegers = [
    'Age of son' => (int) 1,
    'Age of eldest daughter' => (int) 7,
    'Age younger daughter' => (int) 4,
    'Father\'s age' => (int) 30,
];
$testAssocArrayOfStrings = [
    'Age of son' => 'One year',
    'Age of eldest daughter' => 'Seven years',
    'Age younger daughter' => 'Four years',
    'Father\'s age' => 'Thirty years',
];

$descSorter = new Sorter(new DescendingSorter());
$ascSorter = new Sorter(new AscendingSorter());
$nullSorter = new Sorter(new NullSorter());

echo '============[ARRAY OF INTEGERS DESCENDING SORT]============' . \PHP_EOL;
\var_dump($descSorter->sort($testArrayOfIntegers));

echo '============[ARRAY OF INTEGERS ASCENDING SORT]============' . \PHP_EOL;
\var_dump($ascSorter->sort($testArrayOfIntegers));

echo '============[ARRAY OF STRINGS DESCENDING SORT]============' . \PHP_EOL;
\var_dump($descSorter->sort($testArrayOfStrings));

echo '============[ARRAY OF STRINGS ASCENDING SORT]============' . \PHP_EOL;
\var_dump($ascSorter->sort($testArrayOfStrings));

echo '============[ASSOCIATIVE ARRAY OF INTEGERS DESCENDING SORT]============' . \PHP_EOL;
\var_dump($descSorter->sort($testAssocArrayOfIntegers));

echo '============[ASSOCIATIVE ARRAY OF INTEGERS ASCENDING SORT]============' . \PHP_EOL;
\var_dump($ascSorter->sort($testAssocArrayOfIntegers));

echo '============[ASSOCIATIVE ARRAY OF STRINGS DESCENDING SORT]============' . \PHP_EOL;
\var_dump($descSorter->sort($testAssocArrayOfStrings));

echo '============[ASSOCIATIVE ARRAY OF STRINGS ASCENDING SORT]============' . \PHP_EOL;
\var_dump($ascSorter->sort($testAssocArrayOfStrings));

echo '============[ARRAY OF INTEGERS NullSorter]============' . \PHP_EOL;
\var_dump($nullSorter->sort($testArrayOfIntegers));

echo '============[ARRAY OF STRINGS NullSorter]============' . \PHP_EOL;
\var_dump($nullSorter->sort($testArrayOfStrings));

echo '============[ASSOCIATIVE ARRAY OF INTEGERS NullSorter]============' . \PHP_EOL;
\var_dump($nullSorter->sort($testAssocArrayOfIntegers));

echo '============[ASSOCIATIVE ARRAY OF STRINGS NullSorter]============' . \PHP_EOL;
\var_dump($nullSorter->sort($testAssocArrayOfStrings));
