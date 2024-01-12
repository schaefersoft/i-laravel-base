<?php

namespace Schaefersoft\Base\Exceptions;

use Symfony\Component\HttpKernel\Exception\HttpException;

class TurnstileRequestException extends HttpException
{
    public function __construct($message = null, \Throwable $previous = null, array $headers = [], $code = 0)
    {
        parent::__construct(500, $message, $previous, $headers, $code);
    }
}
