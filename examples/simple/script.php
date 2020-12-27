<?php

declare(strict_types=1);

require __DIR__.'/../../vendor/autoload.php';

use Superrosko\ExamplePhpComposer\Example;

echo (new Example('test string'))->getValue();
