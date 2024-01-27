<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingStoreRequest;
use Modules\Services\SettingService;
use Modules\Enums\SettingType;
use Modules\Resources\SettingResource;

class SettingController extends Controller
{
    public function __construct(
        protected SettingService $service,
    ) {}

    public function store(SettingStoreRequest $request): SettingResource
    {
        $setting = $this->service->store(
            $request->user(),
            SettingType::from($request->validated('type')),
            $request->validated('value')
        );

        return SettingResource::make($setting);
    }
}
