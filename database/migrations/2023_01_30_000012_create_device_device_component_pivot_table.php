<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceDeviceComponentPivotTable extends Migration
{
    public function up()
    {
        Schema::create('device_device_component', function (Blueprint $table) {
            $table->unsignedBigInteger('device_component_id');
            $table->foreign('device_component_id', 'device_component_id_fk_7937116')->references('id')->on('device_components')->onDelete('cascade');
            $table->unsignedBigInteger('device_id');
            $table->foreign('device_id', 'device_id_fk_7937116')->references('id')->on('devices')->onDelete('cascade');
        });
    }
}
