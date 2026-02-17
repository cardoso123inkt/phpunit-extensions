<?php

declare(strict_types=1);

namespace DR\PHPUnitExtensions\Trait;

use PHPUnit\Framework\MockObject\MockObject;

trait ExpectInvocationsTrait
{
    protected function expectNoInvocationsFor(MockObject ...$services): void
    {
        foreach ($services as $service) {
            $service->expects($this->never())->method($this->anything());
        }
    }
}
