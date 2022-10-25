<?php

declare(strict_types=1);

namespace Sorting\Tests;

use PHPUnit\Framework\TestCase;

use CodelyTv\Sorting;

final class SortingTest extends TestCase
{
    /** @test */
    public function itShouldSortFromSmallToBig(): void
    {
        $unorderedArray = [5, 1, 4, 2, 8];

        self::assertEquals([1, 2, 4, 5, 8], Sorting::bubbleSort($unorderedArray));
    }
}
