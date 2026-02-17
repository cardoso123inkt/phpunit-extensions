<?php

declare(strict_types=1);

namespace DR\PHPUnitExtensions\Tests\Unit\Trait;

use DR\PHPUnitExtensions\Tests\Resources\Mock\MockInterface;
use DR\PHPUnitExtensions\Trait\ExpectInvocationsTrait;
use PHPUnit\Framework\Attributes\CoversTrait;
use PHPUnit\Framework\ExpectationFailedException;
use PHPUnit\Framework\TestCase;

#[CoversTrait(ExpectInvocationsTrait::class)]
class ExpectInvocationsTraitTest extends TestCase
{
    use ExpectInvocationsTrait;

    public function testExpectNoInvocationsForSingleService(): void
    {
        $service = $this->createMock(MockInterface::class);
        $this->expectNoInvocationsFor($service);
    }

    public function testExpectNoInvocationsForMultipleServices(): void
    {
        $serviceA = $this->createMock(MockInterface::class);
        $serviceB = $this->createMock(MockInterface::class);
        $serviceC = $this->createMock(MockInterface::class);

        $this->expectNoInvocationsFor($serviceA, $serviceB, $serviceC);
    }
}
