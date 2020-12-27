<?php

declare(strict_types=1);

namespace unit;

use Codeception\Test\Unit;
use Superrosko\ExamplePhpComposer\Example;

class ExampleTest extends Unit
{
    public function testSomeFeature(): void
    {
        $value = 'test string';
        $this->assertEquals($value, (new Example($value))->getValue());
    }
}
