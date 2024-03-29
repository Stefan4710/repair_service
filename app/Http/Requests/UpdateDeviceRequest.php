<?php

namespace App\Http\Requests;

use App\Models\Device;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDeviceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('device_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'image' => [
                'array',
                'nullable',
            ],
            'image.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'brand_id' => [
                'integer',
                'exists:brands,id',
                'nullable',
            ],
        ];
    }
}
