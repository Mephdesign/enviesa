<?php

namespace Modules\Strony\Exceptions;

use Core\Exceptions\ExceptionCode;
use Core\Exceptions\InternalException;

class StronaException extends InternalException
{

    public static function planAlreadyExists(): self
    {
        return static::new(
            ExceptionCode::StronaAlreadyExists,
        );
    }

    public static function test(): self
    {
        return static::new(
            ExceptionCode::LimitExceeded,
        );
    }

}
