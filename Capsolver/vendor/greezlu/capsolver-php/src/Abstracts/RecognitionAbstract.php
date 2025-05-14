<?php

declare(strict_types=1);

namespace Capsolver\Abstracts;

use Capsolver\Exceptions\CapsolverException;
use Capsolver\Interfaces\SolverInterface;

abstract class RecognitionAbstract
    extends TaskAbstract
    implements SolverInterface
{
    /**
     * @param array $params
     * @return array
     */
    abstract public function solve(array $params): array;

    /**
     * @param array $request
     * @return array
     *
     * @throws CapsolverException
     */
    protected function process(
        array $request
    ): array {
        $task = $this->createTask($request);

        $solution = $task['solution'] ?? [];

        return is_array($solution) ? $solution : [];
    }
}