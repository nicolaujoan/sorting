<?php

declare(strict_types=1);

namespace Sorting\Tests;

use PHPUnit\Framework\TestCase;

use Sorting\Sorting;

final class SortingTest extends TestCase
{
    /** @test */
    public function itShouldSortFromSmallToBigWithBubbleSort(): void
    {
        $unorderedArray = [5, 1, 4, 2, 8];

        self::assertEquals([1, 2, 4, 5, 8], Sorting::bubbleSort($unorderedArray));
    }

    /** @test */
    public function itShouldSortFromSmallToBigWithMergeSort(): void
    {
        $unorderedArray = [8, 21, 654, 20, 10, 0, -23, -2, 45, 1, 34];

        $sorting = new Sorting();

        self::assertEquals(
            [-23, -2, 0, 1, 8, 10, 20, 21, 34, 45, 654],
            $sorting->merge_sort($unorderedArray)
        );
    }

    /** @test */
    public function itShouldSortFromSmallToBigWithQuickSort()
    {

        $unorderedArray = [5, 4, 3, 2, 1];

        $sorting = new Sorting();

        self::assertEquals([1, 2, 3, 4, 5], $sorting->quickSort($unorderedArray));
    }
}