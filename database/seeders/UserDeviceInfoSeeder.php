<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\User\UserDeviceInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UserDeviceInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all user IDs
        $userIds = User::pluck('id');

        foreach ($userIds as $userId) {
            UserDeviceInfo::create([
                'user_id' => $userId,
                'ip_address' => '192.168.1.1',
                // Sample IP address
                'user_region' => 'Sample Region',
                'mobile_carrier' => 'Sample Carrier',
                'advertising_id' => 'sample_advertising_id',
                'device_model' => 'Sample Model',
                'device_system' => 'Sample System',
                'network_type' => 'Sample Network Type',
                'device_id' => 'sample_device_id',
                'screen_resolution' => '1920x1080',
                // Sample resolution
                'operating_system' => 'Sample OS',
                'app_and_file_info' => 'Sample app and file info',
                'key_stroke_patterns' => 'Sample key stroke patterns',
                'battery_state' => 'Sample battery state',
                'audio_settings' => 'Sample audio settings',
                'connected_audio_devices' => 'Sample connected audio devices',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
