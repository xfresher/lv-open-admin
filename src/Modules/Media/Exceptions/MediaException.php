<?php

namespace Modules\Media\Exceptions;

use Modules\CustomeException;

class MediaException extends CustomeException
{
    public static function noValueProvided(): static
    {
        return new static('No value was provided.', 422);
    }
}
