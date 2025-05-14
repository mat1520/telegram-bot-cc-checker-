<?php

declare(strict_types=1);

namespace Capsolver\Interfaces;

use Capsolver\Exceptions\CapsolverException;

interface SolverInterface
{
    /**
     * @param array $params
     * @return array
     *
     * @throws CapsolverException
     */
    public function solve(array $params): array;
}