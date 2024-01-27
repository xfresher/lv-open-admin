<?php

namespace Modules\Settings\Services;

use Modules\Enums\SettingType;
use Modules\Exceptions\SettingException;
use Modules\Settings\Models\Setting;
use App\Models\User;

class SettingService
{
    public function store(User $user, SettingType $type, string $value): Setting
    {
        if (! $value) {
            throw SettingException::noValueProvided();
        }

        return Setting::updateOrCreate([
            'user_id'   => $user->id,
            'type'      => $type,
        ], [
            'value'     => $value,
        ]);
    }
}
