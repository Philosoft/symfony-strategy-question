<?php

declare(strict_types=1);

namespace App\Service\UsefulStrategy;

use App\Service\RequiredDependency;

class FirstStrategy implements UsefulStrategyInterface
{
    /** @var RequiredDependency */
    private $requiredDependency;

    public function __construct(RequiredDependency $requiredDependency)
    {
        $this->requiredDependency = $requiredDependency;
    }

    public function work(): string
    {
        return '1st strategy';
    }
}
