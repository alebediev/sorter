alebediev/sorter
===============

This library helps sorting sequential and associative arrays of integers and strings. 

Installation
------------

Use the following command to add this library in your project:
```
composer require alebediev/sorter
```

Usage
-----

```php
<?php

...

use Alebediev\Sorter\Sorter;
use Alebediev\Sorter\Strategy\ScalarType\DescendingSorter;
use Alebediev\Sorter\Strategy\ScalarType\AscendingSorter;
use Alebediev\Sorter\Strategy\NullSorter;

...

$descSorter = new Sorter(new DescendingSorter());
$ascSorter = new Sorter(new AscendingSorter());
$nullSorter = new Sorter(new NullSorter());

$descSortedArray = $descSorter->sort($sortableArray);
$ascSortedArray = $ascSorter->sort($sortableArray);

// NullSorter
$array = $nullSorter->sort($sortableArray); 

// for change sorting strategy
$someTestArray = $descSorter->changeStrategy(new NullSorter())->sort($sortableArray);

```


License
-------

MIT [license](LICENSE).

Copyright (c) 2019 Andrii Lebediev