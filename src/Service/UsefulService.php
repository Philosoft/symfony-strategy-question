<?php

declare(strict_types=1);

namespace App\Service;

use App\Service\UsefulStrategy\FirstStrategy;
use App\Service\UsefulStrategy\SecondStrategy;
use App\Service\UsefulStrategy\UsefulStrategyInterface;
use Symfony\Component\HttpFoundation\Response;

class UsefulService
{
    /** @var UsefulStrategyInterface */
    private $strategy;

    public function __construct(int $strategyType, RequiredDependency $requiredDependency) {
        switch ($strategyType) {
            case 1:
            default:
                $this->strategy = new FirstStrategy($requiredDependency);
                break;

            case 2:
                $this->strategy = new SecondStrategy($requiredDependency, new AdditionalDependency());
                break;
        }
    }

    public function doWork() {
        return new Response($this->strategy->work());
    }
}
