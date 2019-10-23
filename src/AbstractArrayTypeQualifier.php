<?php
/**
 * Created by PhpStorm.
 * User: 006094
 * Date: 23.10.2019
 * Time: 8:32
 */

namespace Alebediev\Sorter;


abstract class AbstractArrayTypeQualifier
{
    protected function isAssocArray(array $array): bool
    {
        if (\array_keys($array) !== \range(0, \count($array) - 1)) {
            $arrayType = true;
        } else {
            $arrayType = false;
        }

        return $arrayType;
    }
}