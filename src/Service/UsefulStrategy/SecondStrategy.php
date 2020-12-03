<?php

declare(strict_types=1);

namespace App\Service\UsefulStrategy;

use App\Service\AdditionalDependency;
use App\Service\RequiredDependency;

class SecondStrategy implements UsefulStrategyInterface
{
    /** @var RequiredDependency */
    private $requiredDependency;
    /** @var AdditionalDependency */
    private $additionalDependency;

    public function __construct(RequiredDependency $requiredDependency, AdditionalDependency $additionalDependency)
    {
        $this->requiredDependency = $requiredDependency;
        $this->additionalDependency = $additionalDependency;
    }

    public function work(): string
    {
        return '2nd strategy';
    }
}
