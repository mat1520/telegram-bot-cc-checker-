<?php

declare(strict_types=1);

namespace Capsolver\Solvers\Token;

use Capsolver\Exceptions\CapsolverException;
use Capsolver\Exceptions\RequestException;
use Capsolver\Abstracts\TokenAbstract;

class ReCaptchaV3 extends TokenAbstract
{
    public const TASK                       = 'ReCaptchaV3Task';
    public const ENTERPRISE_TASK            = 'ReCaptchaV3EnterpriseTask';
    public const TASK_PROXYLESS             = 'ReCaptchaV3TaskProxyLess';
    public const ENTERPRISE_TASK_PROXYLESS  = 'ReCaptchaV3EnterpriseTaskProxyLess';
    public const M1_TASK_PROXYLESS          = 'ReCaptchaV3M1TaskProxyLess';

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
            self::ENTERPRISE_TASK_PROXYLESS,
            self::M1_TASK_PROXYLESS
        ];

        $type = $params['type'] ?? '';

        if (!in_array($type, $allowedTypes)) {
            throw new RequestException(
                'Unrecognized task type'
            );
        }
    }
}