<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceComponent extends Model
{
    use HasAdvancedFilter;
    use HasFactory;

    public $table = 'device_components';

    protected $casts = [
        'status' => 'boolean',
    ];

    protected $orderable = [
        'id',
        'name',
        'price',
        'status',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $filterable = [
        'id',
        'name',
        'price',
        'device.name',
    ];

    protected $fillable = [
        'name',
        'price',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function device()
    {
        return $this->belongsToMany(Device::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
