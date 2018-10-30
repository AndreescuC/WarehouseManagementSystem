<?php

namespace AppBundle\Service;

use Doctrine\Common\Persistence\ManagerRegistry;

class StatisticsService
{
    private $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;

    }
}