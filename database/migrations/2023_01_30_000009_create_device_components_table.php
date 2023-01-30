<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceComponentsTable extends Migration
{
    public function up()
    {
        Schema::create('device_components', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->boolean('status')->default(0)->nullable();
            $table->timestamps();
        });
    }
}
