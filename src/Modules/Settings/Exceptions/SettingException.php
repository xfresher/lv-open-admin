<?php

namespace Modules\Exceptions;

use Modules\CustomeException;

class SettingException extends CustomeException
{
    public static function noValueProvided(): static
    {
        return new static('No value was provided.', 422 );
    }
}
