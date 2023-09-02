<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Query Optimization:
        // $userId = 1;
        // $user = User::with('profile')->find($userId);
        // // Avoid using Select * and only select necessary columns
        // $users = User::select('name', 'email')->get();
        // // Avoid using SELECT * and only select necessary columns
        // $users = User::select('name', 'email')->get();

        // // Use proper joins
        // $usersWithProfile = User::join('user_profiles', 'users.id', '=', 'user_profiles.user_id')
        //     ->select('users.name', 'user_profiles.bio')
        //     ->get();

        // // Use EXPLAIN to analyze query execution plan
        // $users = User::where('role', 'admin')->get();
        // DB::connection()->enableQueryLog();
        // $users = User::where('role', 'admin')->get();
        // dd(DB::getQueryLog());


        // Normalization
        // Schema::create('users', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->timestamp('email_verified_at')->nullable();
        //     $table->string('password');
        //     // $table->foreignId('role_id')->constrained()->index(); // Relationship with roles table
        //     $table->foreignId('role_id')->default(1)->constrained('roles'); // Set default role
        //     $table->string('avatar')->nullable();
        //     $table->timestamps();
        // });

        // Schema::create('user_profiles', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('user_id')->constrained()->index();
        //     $table->string('bio')->nullable();
        //     $table->date('birthdate')->nullable();
        //     $table->string('location')->nullable();
        //     $table->string('website')->nullable();
        //     // $table->enum('gender', ['male', 'female', 'other'])->nullable();
        //     $table->enum('gender', ['male', 'female', 'other'])->nullable();
        //     $table->string('phone')->nullable();
        //     $table->string('interests')->nullable();
        //     $table->string('occupation')->nullable();
        //     $table->string('timezone')->nullable();
        //     $table->rememberToken();
        //     $table->timestamps();
        // });
        // Schema::create('user_device_infos', function (Blueprint $table) {
        //     $table->id();
        //     // $table->foreignId('user_id')->constrained()->index();
        //     $table->foreignId('user_id')->constrained();
        //     $table->ipAddress('ip_address')->nullable();
        //     $table->string('user_region')->nullable();
        //     $table->string('mobile_carrier')->nullable();
        //     $table->string('advertising_id')->nullable();
        //     $table->string('device_model')->nullable();
        //     $table->string('device_system')->nullable();
        //     $table->string('network_type')->nullable();
        //     $table->string('device_id')->nullable();
        //     $table->string('screen_resolution')->nullable();
        //     $table->string('operating_system')->nullable();
        //     $table->text('app_and_file_info')->nullable();
        //     $table->text('key_stroke_patterns')->nullable();
        //     $table->string('battery_state')->nullable();
        //     $table->string('audio_settings')->nullable();
        //     $table->string('connected_audio_devices')->nullable();
        //     $table->timestamps();
        // });

        // // Denormalized table
        // Schema::create('user_full_infos', function (Blueprint $table) {
        //     $table->id();
        //     // $table->foreignId('user_id')->constrained()->index();
        //     $table->foreignId('user_id')->constrained();
        //     $table->string('location')->nullable();
        //     $table->string('website')->nullable();
        //     $table->enum('gender', ['male', 'female', 'other'])->nullable();
        //     $table->string('phone')->nullable();
        //     $table->string('interests')->nullable();
        //     $table->string('occupation')->nullable();
        //     // ... other fields from user_profiles
        //     $table->text('about')->nullable();
        //     $table->string('education')->nullable();
        //     $table->string('language')->nullable();
        //     $table->string('skills')->nullable();
        //     $table->string('social_links')->nullable();
        //     $table->string('hobbies')->nullable();
        //     $table->string('family_status')->nullable();
        //     $table->string('relationship_status')->nullable();
        //     $table->timestamps();
        // });



        // Schema::create('users', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->timestamp('email_verified_at')->nullable();
        //     $table->string('password');
        //     $table->enum('role', ['admin', 'user', 'editor'])->default('user');
        //     $table->foreignId('role_id')->constrained(); // Relationship with roles table
        //     $table->string('avatar')->nullable();
        //     $table->string('bio')->nullable();
        //     $table->date('birthdate')->nullable();
        //     $table->string('location')->nullable();
        //     $table->string('website')->nullable();
        //     $table->enum('gender', ['male', 'female', 'other'])->nullable();
        //     $table->string('phone')->nullable();
        //     $table->string('interests')->nullable();
        //     $table->string('occupation')->nullable();
        //     $table->text('about')->nullable();
        //     $table->string('education')->nullable();
        //     $table->string('language')->nullable();
        //     $table->string('skills')->nullable();
        //     $table->string('social_links')->nullable();
        //     $table->string('hobbies')->nullable();
        //     $table->string('family_status')->nullable();
        //     $table->string('relationship_status')->nullable();
        //     $table->string('timezone')->nullable();
        //     // Additional fields
        //     $table->ipAddress('ip_address')->nullable();
        //     $table->string('user_region')->nullable();
        //     $table->string('mobile_carrier')->nullable();
        //     $table->string('timezone')->nullable();
        //     $table->string('advertising_id')->nullable();
        //     $table->string('device_model')->nullable();
        //     $table->string('device_system')->nullable();
        //     $table->string('network_type')->nullable();
        //     $table->string('device_id')->nullable();
        //     $table->string('screen_resolution')->nullable();
        //     $table->string('operating_system')->nullable();
        //     $table->text('app_and_file_info')->nullable();
        //     $table->text('key_stroke_patterns')->nullable();
        //     $table->string('battery_state')->nullable();
        //     $table->string('audio_settings')->nullable();
        //     $table->string('connected_audio_devices')->nullable();

        //     $table->rememberToken();
        //     $table->timestamps();
        // });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_full_info');
        Schema::dropIfExists('user_device_info');
        Schema::dropIfExists('user_profiles');
        Schema::dropIfExists('users');
    }
};
