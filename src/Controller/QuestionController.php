<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\RequiredDependency;
use App\Service\UsefulService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     */
    public function index(Request $request, RequiredDependency $requiredDependency): Response
    {
        $service = new UsefulService(
            (int)$request->get('s', mt_rand(1, 2)),
            $requiredDependency
        );

        return $service->doWork();
    }
}
