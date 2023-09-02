<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schema::create('alerts', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        // Create alerts table
        // Schema::create('alerts', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('title');
        //     $table->text('description')->nullable();
        //     $table->timestamps();
        // });

        // // Create notifications table
        // Schema::create('alert_notifications', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('user_id')->constrained('users');
        //     $table->foreignId('alert_id')->constrained('alerts');
        //     $table->boolean('read')->default(false);
        //     $table->timestamps();
        // });

        // // Create push_notifications table (for mobile push notifications)
        // Schema::create('alert_push_notifications', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('user_id')->constrained('users');
        //     $table->string('device_token'); // Mobile device token
        //     $table->text('message');
        //     $table->timestamps();
        // });
    }

    public function down()
    {
        Schema::dropIfExists('push_notifications');
        Schema::dropIfExists('alert_notifications');
        Schema::dropIfExists('alerts');
        Schema::dropIfExists('users');
    }
};
