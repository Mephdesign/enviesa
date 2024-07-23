<?php

namespace Modules\Produkty\Exceptions;

use Core\Exceptions\ExceptionCode;
use Core\Exceptions\InternalException;

class ProduktException extends InternalException
{

    public static function produktAlreadyExists(): self
    {
        return static::new(
            ExceptionCode::ProduktAlreadyExists,
        );
    }

    public static function test(): self
    {
        return static::new(
            ExceptionCode::LimitExceeded,
        );
    }

}
