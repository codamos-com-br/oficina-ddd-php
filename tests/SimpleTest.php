<?php

declare(strict_types=1);

namespace Codamos\OficinaDddPhp\Tests;

use PHPUnit\Framework\TestCase;

class SimpleTest extends TestCase
{
    protected $backupStaticAttributes  =false;
    protected $runTestInSeparateProcess = false;

    public function testMyTest(): void
    {
        self::assertTrue(true);
    }
}
