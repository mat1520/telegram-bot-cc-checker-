<?php

declare(strict_types=1);

namespace Capsolver\Abstracts;

use Capsolver\Exceptions\CapsolverException;
use Capsolver\Exceptions\ResponseException;
use Capsolver\Exceptions\RequestException;

abstract class TaskAbstract
{
    protected const HOST = 'https://api.capsolver.com/';

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
     * @param array $request
     * @return array
     *
     * @throws CapsolverException
     */
    protected function createTask(array $request): array
    {
        return $this->send(
            self::HOST . 'createTask',
            $this->encode($this->hydrate($request))
        );
    }

    /**
     * @param array $request
     * @return array
     *
     * @throws CapsolverException
     */
    protected function getTaskResult(array $request): array
    {
        return $this->send(
            self::HOST . 'getTaskResult',
            $this->encode($this->hydrate($request, false))
        );
    }

    /**
     * @return array
     *
     * @throws CapsolverException
     */
    protected function getBalance(): array
    {
        return $this->send(
            self::HOST . 'getBalance',
            $this->encode($this->hydrate([], false))
        );
    }

    /**
     * @param array $request
     * @return array
     *
     * @throws CapsolverException
     */
    abstract protected function process(array $request): array;

    /**
     * @param array $params
     * @param bool $isTask
     * @return array
     */
    private function hydrate(
        array $params,
        bool $isTask = true
    ): array {
        $request = $isTask
            ? ['task' => $params]
            : $params;

        $request['clientKey'] = $this->key;

        return $request;
    }

    /**
     * @param array $data
     * @return string
     *
     * @throws RequestException
     */
    private function encode(array $data): string
    {
        $dataEncoded = json_encode($data, JSON_FORCE_OBJECT);

        if (!is_string($dataEncoded)) {
            throw new RequestException('Incorrect request params');
        }

        return $dataEncoded;
    }

    /**
     * @param string $address
     * @param string $body
     * @return array
     *
     * @throws ResponseException
     */
    private function send(
        string $address,
        string $body
    ): array {
        $curl = curl_init();

        $headers = [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($body)
        ];

        $options = [
            CURLOPT_URL             => $address,
            CURLOPT_POST            => true,
            CURLOPT_POSTFIELDS      => $body,
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_HEADER          => false,
            CURLOPT_FOLLOWLOCATION  => true,
            CURLOPT_TIMEOUT         => 60,
            CURLOPT_SSL_VERIFYHOST  => false,
            CURLOPT_SSL_VERIFYPEER  => false,
            CURLOPT_HTTPHEADER      => $headers
        ];

        curl_setopt_array($curl, $options);

        return $this->execute($curl);
    }

    /**
     * @param $curl
     * @return array
     *
     * @throws ResponseException
     */
    private function execute($curl): array
    {
        $response = curl_exec($curl);
        $error = curl_error($curl);

        $this->validate($curl, $response, $error);

        curl_close($curl);

        return json_decode($response, true);
    }

    /**
     * @param $curl
     * @param string $response
     * @param string $error
     * @return void
     *
     * @throws ResponseException
     */
    private function validate(
        $curl,
        string $response,
        string $error
    ): void {
        if ($error) {
            throw new ResponseException($error);
        }

        $responseCode = curl_getinfo($curl,CURLINFO_RESPONSE_CODE);
        $responseBody = json_decode($response, true);

        if (!is_numeric($responseCode) || !in_array((int)$responseCode, [200, 400, 401])) {
            throw new ResponseException('Unknown response code');
        }

        if (!is_array($responseBody)) {
            throw new ResponseException('Incorrect response body type');
        }

        $errorId = (int)($responseBody['errorId'] ?? 0);
        $errorCode = $responseBody['errorId'] ?? '';
        $errorDescription = $responseBody['errorDescription'] ?? '';

        if ($errorId !== 0 && $errorCode && $errorDescription) {
            throw new ResponseException($errorDescription);
        }
    }
}