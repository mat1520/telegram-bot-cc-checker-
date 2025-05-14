<?php

declare(strict_types=1);

namespace Capsolver\Abstracts;

use Capsolver\Exceptions\CapsolverException;
use Capsolver\Interfaces\SolverInterface;

abstract class TokenAbstract
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

        $taskId = $task['taskId'];

        $queryRequest = 100;

        while ($queryRequest) {
            $taskResult = $this->getTaskResult(['taskId' => $taskId]);

            $taskStatus = $taskResult['status'] ?? null;

            if ($taskStatus !== 'idle' && $taskStatus !== 'processing') {
                break;
            }

            $queryRequest--;

            sleep(1);
        }

        $solution = $taskResult['solution'] ?? [];

        return is_array($solution) ? $solution : [];
    }
}