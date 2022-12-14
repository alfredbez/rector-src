<?php

declare(strict_types=1);

namespace Rector\Tests\CodeQuality\Rector\ClassConstFetch\ConvertStaticPrivateConstantToSelfRector;

use Iterator;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class ConvertStaticPrivateConstantToSelfRectorForNonFinalClassesTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(string $filePath): void
    {
        $this->doTestFile($filePath);
    }

    /**
     * @return Iterator<array<string>>
     */
    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/FixtureEnableForNonFinalClasses');
    }

    public function provideConfigFilePath(): string
    {
        return __DIR__ . '/config/config_non_final_classes.php';
    }
}
