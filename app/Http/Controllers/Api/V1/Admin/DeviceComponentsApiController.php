<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDeviceComponentRequest;
use App\Http\Requests\UpdateDeviceComponentRequest;
use App\Http\Resources\Admin\DeviceComponentResource;
use App\Models\Device;
use App\Models\DeviceComponent;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DeviceComponentsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('device_component_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DeviceComponentResource(DeviceComponent::with(['device'])->advancedFilter());
    }

    public function store(StoreDeviceComponentRequest $request)
    {
        $deviceComponent = DeviceComponent::create($request->validated());
        $deviceComponent->device()->sync($request->input('device.*.id', []));

        return (new DeviceComponentResource($deviceComponent))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('device_component_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [
                'device' => Device::get(['id', 'name']),
            ],
        ]);
    }

    public function show(DeviceComponent $deviceComponent)
    {
        abort_if(Gate::denies('device_component_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DeviceComponentResource($deviceComponent->load(['device']));
    }

    public function update(UpdateDeviceComponentRequest $request, DeviceComponent $deviceComponent)
    {
        $deviceComponent->update($request->validated());
        $deviceComponent->device()->sync($request->input('device.*.id', []));

        return (new DeviceComponentResource($deviceComponent))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(DeviceComponent $deviceComponent)
    {
        abort_if(Gate::denies('device_component_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new DeviceComponentResource($deviceComponent->load(['device'])),
            'meta' => [
                'device' => Device::get(['id', 'name']),
            ],
        ]);
    }

    public function destroy(DeviceComponent $deviceComponent)
    {
        abort_if(Gate::denies('device_component_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $deviceComponent->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
