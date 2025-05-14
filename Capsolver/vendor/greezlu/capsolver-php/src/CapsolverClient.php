<?php

declare(strict_types=1);

namespace Capsolver;

use Capsolver\Exceptions\CapsolverException;
use Capsolver\Solvers\Token\ReCaptchaV3;
use Capsolver\Solvers\Token\ReCaptchaV2;

class CapsolverClient
{
    private string $key;

    /**
     * @param string $key
     */
    public function __construct(
        string $key
    ) {
        $this->key = $key;
    }

    /**
     * @param string $type
     * @param array $params
     * @return array
     *
     * @throws CapsolverException
     */
    public function recaptchaV3(
        string $type,
        array $params
    ): array {
        $params['type'] = $type;
        $solver = new ReCaptchaV3($this->key);
        return $solver->solve($params);
    }

    /**
     * @param string $type
     * @param array $params
     * @return array
     *
     * @throws CapsolverException
     */
    public function recaptchaV2(
        string $type,
        array $params
    ): array {
        $params['type'] = $type;
        $solver = new ReCaptchaV2($this->key);
        return $solver->solve($params);
    }
}