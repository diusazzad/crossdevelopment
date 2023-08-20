<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDeviceInfo extends Model
{
    use HasFactory;

    protected $table ='user_device_infos';
    protected $fillable = [
        'user_id',
        'ip_address',
        'user_region',
        'mobile_carrier',
        'advertising_id',
        'device_model',
        'device_system',
        'network_type',
        'device_id',
        'screen_resolution',
        'operating_system',
        'app_and_file_info',
        'key_stroke_patterns',
        'battery_state',
        'audio_settings',
        'connected_audio_devices'
    ];

}
