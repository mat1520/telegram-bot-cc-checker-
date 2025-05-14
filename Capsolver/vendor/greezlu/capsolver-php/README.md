# PHP Client for CapSolver API
The simple client for [CapSolver](https://capsolver.com) captcha solving service.

- [Installation](#installation)
    - [Composer](#composer)
- [Configuration](#configuration)
- [Solve captcha](#solve-captcha)
    - [ReCaptcha v3](#recaptcha-v3)
    - [ReCaptcha v2](#recaptcha-v2)
- [Error handling](#error-handling)

## Installation
This package can be installed via composer.

### Composer
```
composer require greezlu/capsolver-php
```

## Configuration
`CapsolverClient` instance can be created like this:
```php
$solver = new \Capsolver\CapsolverClient('YOUR_API_KEY');
```

## Solve captcha
Find more information about request and response in the related documentation page. 

### ReCaptcha v3
More in the [documentation.](https://docs.capsolver.com/guide/captcha/ReCaptchaV3.html)

Request:
```php
$solution = $solver->recaptchaV3(
    \Capsolver\Solvers\Token\ReCaptchaV3::TASK,
    [
      'websiteURL'    => 'https://www.google.com/recaptcha/api2/demo',
      'websiteKey'    => '6Le-wvkSAAAAAPBMRTvw0Q4Muexq9bi0DJwx_mJ-',
      'pageAction'    => 'verify',
      'minScore'      => 0.6,
      'proxy'         => 'http:ip:port:user:pass'
    ]
);
```

Response:
```php
$solution = [
    'userAgent' => 'xxx',
    'expireTime' => 1671615324290,
    'gRecaptchaResponse' => '3AHJ.....'
];
```

### ReCaptcha v2
More in the [documentation.](https://docs.capsolver.com/guide/captcha/ReCaptchaV2.html)

Request:
```php
$solution = $solver->recaptchaV2(
    \Capsolver\Solvers\Token\ReCaptchaV2::TASK,
    [
      'websiteURL'    => 'https://www.google.com/recaptcha/api2/demo',
      'websiteKey'    => '6Le-wvkSAAAAAPBMRTvw0Q4Muexq9bi0DJwx_mJ-',
      'proxy'         => 'http:ip:port:user:pass'
    ]
);
```

Response:
```php
$solution = [
    'userAgent' => 'xxx',
    'expireTime' => 1671615324290,
    'gRecaptchaResponse' => '3AHJ.....'
];
```

## Error handling
If case of an error solver throws an instance of `CapsolverException` exception.

```php
try {
    $solution = $solver->recaptchaV3('', []);
} catch (\Capsolver\Exceptions\RequestException $error) {
    // Error happened before api request
} catch (\Capsolver\Exceptions\ResponseException $error) {
    // Error happened after api request
} catch (\Capsolver\Exceptions\CapsolverException $error) {
    // General error
}
```
