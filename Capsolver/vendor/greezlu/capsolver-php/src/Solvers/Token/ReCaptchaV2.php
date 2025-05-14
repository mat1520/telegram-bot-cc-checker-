<?php

declare(strict_types=1);

namespace Capsolver\Solvers\Token;

use Capsolver\Exceptions\CapsolverException;
use Capsolver\Exceptions\RequestException;
use Capsolver\Abstracts\TokenAbstract;

class ReCaptchaV2 extends TokenAbstract
{
    public const TASK                       = 'ReCaptchaV2Task';
    public const ENTERPRISE_TASK            = 'ReCaptchaV2EnterpriseTask';
    public const TASK_PROXYLESS             = 'ReCaptchaV2TaskProxyLess';
    public const ENTERPRISE_TASK_PROXYLESS  = 'ReCaptchaV2EnterpriseTaskProxyLess';

    /**
     * @param array $params
     * @return array
     *
     * @throws CapsolverException
     */
    public function solve(
        array $params
    ): array {
        $this->validate($params);
        return $this->process($params);
    }

    /**
     * @param array $params
     * @return void
     *
     * @throws RequestException
     */
    private function validate(array $params): void
    {
        $allowedTypes = [
            self::TASK,
            self::ENTERPRISE_TASK,
            self::TASK_PROXYLESS,
            self::ENTERPRISE_TASK_PROXYLESS
        ];

        $type = $params['type'] ?? '';

        if (!in_array($type, $allowedTypes)) {
            throw new RequestException(
                'Unrecognized task type'
            );
        }
    }
}