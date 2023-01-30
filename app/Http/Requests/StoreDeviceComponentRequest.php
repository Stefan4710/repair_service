<?php

namespace App\Http\Requests;

use App\Models\DeviceComponent;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreDeviceComponentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('device_component_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'price' => [
                'numeric',
                'nullable',
            ],
            'device' => [
                'array',
            ],
            'device.*.id' => [
                'integer',
                'exists:devices,id',
            ],
            'status' => [
                'boolean',
            ],
        ];
    }
}
